<?php 
   session_start(); 
   header("Cache-Control: private, max-age=10800, pre-check=10800");
   header("Pragma: private");
   header("Expires: " . date(DATE_RFC822,strtotime(" 2 day")));
   $img = "some_image.png"; 
   if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) 
   && 
   (strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == filemtime($img))) {
      // send the last mod time of the file back
      header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($img)).' GMT', 
      true, 304);
      exit;
   }
   include('AImage.php');
   $file = base64_decode($_GET['img']);
   header('Content-type: image/jpeg'); 
   list($width, $height) = getimagesize($file); 
   $image = new AImage();
   $image->load($file);
   if(isset($_GET['resize'])) {
      $image->scaleToLongest(200);
   } 
   if(isset($_GET['bw'])) {
      $image->convertToBw();
   }
   $image->output();











