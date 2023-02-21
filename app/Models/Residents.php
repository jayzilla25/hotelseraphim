<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Residents extends Model
{
    use HasFactory;
    use Sortable;

    /**
     * Accessor for Age.
     */
    public function age()
    {
        return Carbon::parse($this->attributes['b_date'])->age;
    }

    public $fillable = ['avatar', 'last_name', 'first_name', 'middle_name', 'suffix', 'b_date', 'b_place', 'gender', 'religion', 'nationality', 'citizenship', 'civil_status', 'blood_type', 'has_philhealth', 'occupation', 'employment_status', 'monthly_income', 'educational_attainment', 'mailing_address', 'contact_email', 'contact_phone', 'household_id', 'relation_to_head', 'user_id'];
    public $sortable = ['id', 'last_name', 'b_date', 'gender', 'civil_status', 'contact_email', 'contact_phone', 'updated_at'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('last_name', 'like', '%' . request('search') . '%')
                ->orWhere('first_name', 'like', '%' . request('search') . '%')
                ->orWhere('middle_name', 'like', '%' . request('search') . '%')
                ->orWhere('civil_status', 'like', '%' . request('search') . '%')
                ->orWhere('gender', 'like', request('search') . '%')
                ->orWhere('employment_status', 'like', '%' . request('search') . '%')
                ->orWhere('id', request('search'));
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function barangayofficials()
    {
        return $this->belongsTo(BarangayOfficials::class, 'resident_id');
    }

    public function households()
    {
        return $this->belongsTo(Households::class, 'household_id');
    }
}
