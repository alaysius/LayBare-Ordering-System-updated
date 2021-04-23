<?php
$filename = $_POST['postvar']; //the var you put in your ajax data:{}

  if (file_exists($filename)) {
    unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } else {
    echo 'Could not delete '.$filename.', file does not exist';
  }

?>