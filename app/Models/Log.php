<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = ['action', 'by_userId', 'by_userName', 'receiver_type', 'receiver_name'];

    public function scopeFilter($query, array $filters){
        if ($filters['search'] ?? false) {
            $query->where('by_userName', 'like', '%' . request('search') . '%')
                ->orWhere('receiver_type', 'like', '%' . request('search') . '%')
                ->orWhere('by_userId', request('search'))
                ->orWhere('receiver_name', 'like', '%' . request('search') . '%')
                ;
        }
    }
}
