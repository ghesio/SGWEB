<?php
/*
SGWEB - arduino.php
This file write a string on serial using the provided python script.
The serial has this format:
  x:y:z
Where:
  x - is the function
  y - is the arduino pin
  z - is the parameter

Function reference:
  Set pin as out
    o:pin:o

  Set pin as in
    i:pin:i

  Write 0 on pin
    o:pin:0

  Write 1 on pin
    o:pin:1

  Read analog from pin
    i:pin:a

  Read digital from pin
    i:pin:d

  Write analog (PWM)
    p:pin:(0-255)
*/

// Exctract GET variables
extract($_GET);
// Python absolute path
$GLOBALS['path'] ='/home/udooer/Desktop/sgweb.py';

if($get==1) SendCommand($funct,$pin,$param,$php);


function SendCommand($funct,$pin,$param,$php){
  $exec="python ".$GLOBALS['path']." ".$funct." ".$pin." ".$param;
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
