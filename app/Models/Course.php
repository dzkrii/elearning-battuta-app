<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'instructor_id',
    ];

    // Relasi ke User (Dosen)
    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
}
