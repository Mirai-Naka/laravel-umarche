<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageService
{

    public static function upload($imageFile, $folderName)
    {
        $fileName = uniqid(rand() . '_'); //ランダムなファイル名作成
        $extension = $imageFile->extension(); //拡張子をつける
        $fileNameToStore = $fileName . '.' . $extension;
        $resizedImage = InterventionImage::make($imageFile)->resize(1920, 1080)->encode();

        Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizedImage);

        return $fileNameToStore;
    }
}
