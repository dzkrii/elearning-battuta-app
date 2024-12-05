<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'question',
        'answer',
    ];

    // Relasi ke Quiz
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
