<?php

namespace App\Traits;

use Intervention\Image\Facades\Image;

trait UploadImage {
    function getImageStorageLocation() {
        return "storage/app/public/photos/products/";
    }

    function upload($image) {
        $filename = time() . "-" . bin2hex(openssl_random_pseudo_bytes(16)) . "."  . $image->getClientOriginalExtension();
        $image_storage_path = "app/" . $this->getImageStorageLocation() . $filename;
        $image->storeAs($this->getImageStorageLocation(), $filename);
        Image::make(storage_path($image_storage_path))->resize(900, 600)->save();

        return $image_storage_path;
    }
}