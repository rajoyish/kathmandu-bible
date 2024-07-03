<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Advisor extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'name',
        'designation',
        'organization',
        'order',
    ];

    // Delete old photo if new photo is uploaded
    protected static function booted()
    {
        static::updating(function ($advisor) {
            if ($advisor->isDirty('photo')) {
                Storage::delete('public/'.$advisor->getOriginal('photo'));
            }
        });
    }
}
