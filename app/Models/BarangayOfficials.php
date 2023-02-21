<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangayOfficials extends Model
{
    use HasFactory;

    protected $table = 'barangayofficials';

    protected $fillable = ['resident_id', 'barangayofficial_name', 'role', 'term_start', 'term_end'];

    public function scopeFilter($query, array $filters){
        if ($filters['search'] ?? false) {
            $query->where('barangayofficial_name', 'like', '%' . request('search') . '%')
                ->orWhere('role', 'like', '%' . request('search') . '%')
                ->orWhere('id', request('search'))
                ->orWhere('term_start', 'like', '%' . request('search') . '%')
                ->orWhere('term_end', 'like', '%' . request('search') . '%')
                ;
        }
    }

    public function age()
    {
        return Carbon::parse($this->attributes['b_date'])->age;
    }
    public function residents(){
        return $this->hasOne(Residents::class, 'resident_id');
    }

    public function zones(){
        return $this->belongsTo(Zones::class, 'barangay_official_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
