<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'designation',
        'phone',
        'email',
        'photo',
    ];

    // Delete old photo if new photo is uploaded
    protected static function booted()
    {
        static::updating(function ($author) {
            if ($author->isDirty('photo')) {
                Storage::delete('public/'.$author->getOriginal('photo'));
            }
        });
    }
}
