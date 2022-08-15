<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['username'] ?? false,
            fn ($query, $username) => $query->whereHas('username', fn ($query) => $query->where('username', $username))
        );
    }
}
