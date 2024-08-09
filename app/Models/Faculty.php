<?php

namespace App\Models;

use App\Enums\FacultyPosition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public $fillable = [
        'photo',
        'name',
        'position',
        'academic_degree',
        'order',
    ];

    protected $casts = [
        'position' => FacultyPosition::class,
    ];
}
