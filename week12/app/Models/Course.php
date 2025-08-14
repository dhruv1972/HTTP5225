<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'professor_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
