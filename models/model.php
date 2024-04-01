<?php

class ImageResize
{
    public function resizeImage($fileName, $tmpName)
    {
        $originalImagePath = '../images/' . $fileName;
        $thumbnailImagePath = '../images/thumbnail_' . $fileName;

        move_uploaded_file($tmpName, $originalImagePath);

        list($width, $height) = getimagesize($originalImagePath);
        $newWidth = 300;
        $newHeight = 200;
        $source = imagecreatefromjpeg($originalImagePath);
        $destination = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresized($destination, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagejpeg($destination, $thumbnailImagePath, 100);
        imagedestroy($source);
        imagedestroy($destination);

        return [$originalImagePath, $thumbnailImagePath];
    }
}


