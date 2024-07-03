<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory;

    public $fillable = [
        'photo',
    ];

    // Delete old photo if new photo is uploaded
    protected static function booted()
    {
        static::updating(function ($slider) {
            if ($slider->isDirty('photo')) {
                Storage::delete('public/'.$slider->getOriginal('photo'));
            }
        });
    }
}
