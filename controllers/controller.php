<?php

require_once '../models/model.php';

class ImageController
{
    public function handleRequest()
    {
        if (isset($_FILES['image']) && isset($_POST['submit'])) {
            $fileName = $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];

            $model = new ImageResize();
            list($originalImagePath, $thumbnailImagePath) = $model->resizeImage($fileName, $tmpName);

            include '../views/resized.php';
        } else {
            include '../views/upload.php';
        }
    }
}



