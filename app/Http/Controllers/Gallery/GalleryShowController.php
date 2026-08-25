<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Laravel\Head\Facades\Head;

class GalleryShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Gallery $gallery)
    {
        $title = $gallery->title;

        Head::title($title)
            ->description('View the ' . $title . ' gallery from Kathmandu Bible Institute.')
            ->og(image: url('storage/' . $gallery->cover_photo));

        $photos = collect($gallery->photos);

        $photosWithDimensions = $photos->map(function ($photo) {
            $fullImagePath = public_path('storage/'.$photo);
            if (file_exists($fullImagePath)) {
                $imageSize = getimagesize($fullImagePath);
                if ($imageSize !== false) {
                    return [
                        'path' => $photo,
                        'width' => $imageSize[0],
                        'height' => $imageSize[1],
                    ];
                }
            }

            return [
                'path' => $photo,
                'width' => null,
                'height' => null,
            ];
        });

        return view('galleries.show', [
            'gallery' => $gallery,
            'photosWithDimensions' => $photosWithDimensions,
        ]);
    }
}
