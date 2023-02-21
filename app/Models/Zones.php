<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    use HasFactory;

    public function barangayofficials(){
        return $this->hasOne(BarangayOfficials::class, 'barangay_official_id');
    }
}
