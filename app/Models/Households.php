<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Households extends Model
{
    use HasFactory;


    public function scopeFilter($query, array $filters){
        if ($filters['search'] ?? false) {
            $query->where('household_head', 'like', '%' . request('search') . '%')
                ->orWhere('street_address', 'like', '%' . request('search') . '%')
                ->orWhere('id', request('search'))
                ->orWhere('ownership_status', 'like', '%' . request('search') . '%')
                ->orWhere('dwelling_type', 'like', '%' . request('search') . '%')
                ->orWhere('water_source', 'like', '%' . request('search') . '%')
                ->orWhere('lighting_source', 'like', '%' . request('search') . '%')
                ->orWhere('toilet_type', 'like', '%' . request('search') . '%')
                ;
        }
    }
    protected $fillable = ['household_head','province', 'city', 'barangay', 'zone_id', 'street_address', 'ownership_status', 'dwelling_type', 'water_source', 'lighting_source', 'toilet_type', 'created_by', 'last_update_by'];
    public function residents(){
        return $this->hasMany(Residents::class, 'household_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
