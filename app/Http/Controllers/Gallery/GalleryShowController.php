<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Gallery $gallery)
    {
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
