<?php

namespace App\Models;

use App\Models\User;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ects',
        'department',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function grade()
    {
        return $this->hasMany(Grade::class);
    }
}
