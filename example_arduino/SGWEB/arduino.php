<?php
// Exctract GET variables
extract($_GET);
// Python absolute path
$GLOBALS['path'] ='/home/udooer/Desktop/sgweb.py';
if($get==1) SendCommand($funct,$pin,$param,$php);


function SendCommand($funct,$pin,$param,$php){  
  $exec="python ".$GLOBALS['path']." ".$funct." ".$pin." ".$param;;
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
