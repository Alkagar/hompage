<?php 
    include('AImage.php');
    $file = base64_decode($_GET['img']);
    header('Content-type: image/jpeg'); 
    list($width, $height) = getimagesize($file); 
    $image = new AImage();
    $image->load($file);
    if(isset($_GET['resize'])) {
        $image->resizeToWidth(200);
    } 
    if(isset($_GET['bw'])) {
        $image->convertToBw();
    }
    $image->output();











