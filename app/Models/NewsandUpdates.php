<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsandUpdates extends Model
{
    use HasFactory;

    protected $table = 'newsandupdates';
    protected $fillable = ['user_id', 'user_name', 'title', 'sub_title', 'category', 'image', 'body'];

    public function scopeFilter($query, array $filters){
        if ($filters['search'] ?? false) {
            $query->where('user_name', 'like', '%' . request('search') . '%')
                ->orWhere('title', 'like', '%' . request('search') . '%')
                ->orWhere('id', request('search'))
                ->orWhere('category', 'like', '%' . request('search') . '%')
                ;
        }
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
