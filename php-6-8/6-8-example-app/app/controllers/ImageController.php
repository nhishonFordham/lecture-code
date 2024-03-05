<?php

namespace app\controllers;

class ImageController
{
    public function saveImage() {
        try {
//            echo var_dump($_FILES);
            $destination = "./uploads/" . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            $uploadedImage = imagecreatefromjpeg($destination);
            $imageData = getimagesize($destination);
            $newWidth = 100;
            $newHeight = 100;
            if (!$uploadedImage) {
                throw new \Error('The uploaded file is corrupted (or wrong format)');
            } else {
                $milliseconds = floor(microtime(true) * 1000);
                $new = imagecreatetruecolor($newWidth, $newHeight);
                imagecopyresampled($new,$uploadedImage, 0, 0, 0, 0, $newHeight, $newWidth, $imageData[0], $imageData[1]);
                imagejpeg($new, './uploads/'. $milliseconds . '.jpeg');
                echo '/uploads/' . $milliseconds . '.jpeg';
                exit;
            }
        } catch (\Error $e) {
            echo $e;
        }

    }

    public function imagesView() {
        $title = 'Upload images';
        include './assets/views/images/imageFilesView.php';
        exit();
    }

}