<?php
/*
SGWEB - i2c.php
This files read the value of bricks sensors from A9 - See docs
Be sure to enable bricks in system before using
*/

// Exctract GET variables
extract($_GET);
if($get==1) ReadI2c($file, $php);


function ReadI2c($file,$php){
  $exec="cat ".$file; //$file is an absolute path
  $ret=shell_exec($exec);
  if ($ret!=NULL) {
    if ($php==0) {
      echo $ret;
    }
    else {
      return $ret;
    }
  }
}


?>
