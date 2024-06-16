<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover_photo',
        'title',
        'slug',
        'description',
        'photos',
    ];

    protected $casts = [
        'photos' => 'array',
    ];

    public function delete()
    {
        $photos = $this->photos ?? [];
        foreach ($photos as $photo) {
            if (File::exists('storage/'.$photo)) {
                File::delete('storage/'.$photo);
            }
        }
        parent::delete(); // Call the parent delete method to actually delete the record
    }
}
