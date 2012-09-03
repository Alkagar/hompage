<?php 
    // The file you are grayscaling 
    $file = base64_decode($_GET['img']);
    // This sets it to a .jpg, but you can change this to png or gif if that is what you are working with
    header('Content-type: image/jpeg'); 
    // Get the dimensions
    list($width, $height) = getimagesize($file); 
    // Define our source image 
    $source = imagecreatefromjpeg($file); 
    imagefilter($source, IMG_FILTER_GRAYSCALE);
    imagejpeg($source);
