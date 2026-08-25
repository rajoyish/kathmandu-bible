<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'badge_title',
        'badge_color',
        'language',
        'description',
        'purpose',
        'vision',
        'credits',
        'admission_requirements',
        'admission_process',
        'order_column',
    ];

    protected $casts = [
        'admission_requirements' => 'array',
        'admission_process' => 'array',
    ];
}
