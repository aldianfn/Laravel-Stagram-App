<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $with = ['user'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {
        $query->when($filters['username'] ?? false, function ($query, $username) {
            return $query->whereHas('username', function ($query) use ($username) {
                $query->where('username', $username);
            });
        });

        // $query->when(
        //     $filters['username'] ?? false,
        //     fn ($query, $username)
        //     => $query->whereHas('username', fn ($query)
        //     => $query->where('username', $username))
        // );
    }

    // public function getRouteKeyName()
    // {
    //     return 'username';
    // }
}
