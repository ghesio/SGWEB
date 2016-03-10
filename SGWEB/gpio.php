<?php
/*
SGWEB - arduino.php
This file uses bash command to control A9 pins.
Read functions comment for more informations.
*/

// GPIO pins
$GLOBALS['gpio'] = array(4,5,6,7,116,127,124,119,174,175,176,177,202,203,21,20,19,18,17,16,15,14,22,25,124,182,173,172,181,180,107,106);

// Exctract GET variables
extract($_GET);

// Search for function (stored in $funct), you must add your created functions here
switch ($funct) {
  case 'readPin':
    $funct($pin,$php);
    break;
  case 'setPin':
    $funct($pin,$value);
    break;
  case 'readPinMode':
    $funct($pin,$php);
    break;
  case 'setPin':
    $funct($pin,$value);
    break;
  case 'setPinMode':
    $funct($pin,$value);
    break;
  case 'setPWM':
    $funct($chip,$period,$duty);
    break;
  case 'readAcc':
    $funct($axis,$php);
    break;
  case 'readGyro':
    $funct($axis,$php);
    break;
  case 'readMag':
    $funct($axis,$php);
    break;
}

// Function list, you can create new here

// The $php variable is used to choose if you are calling these functions from
// PHP or not
// $php = 0 uses "echo" instruction, used for AJAX callback
// $php = 1 uses "return" instruction, used for PHP returns

//
// Read the GPIO value on pin
// NOTE: see neo docs for more info
//
function readPin($pin,$php){
  $cmd="cat /sys/class/gpio/gpio".$pin."/value";
  $value=shell_exec($cmd);
  if($php==0)
    echo $value;
  else
    return $value;
}

//
//  Set HIGH or LOW value on pin
//  HIGH=1 LOW=0
//
function setPin($pin,$value){
  $cmd="echo ".$value." > /sys/class/gpio/gpio".$pin."/value";
  shell_exec($cmd);
}

//
//  Read direction of pin
//
function readPinMode($pin,$php){
  $cmd="cat /sys/class/gpio/gpio".$pin."/direction";
  $value=shell_exec($cmd);
  if($php==0)
    echo $value;
  else
    return $value;
}

//
//  Set direction of pin
//  $pin is out or in
//
function setPinMode($pin,$value){
  $cmd="echo ".$value." > /sys/class/gpio/gpio".$pin."/direction";
  shell_exec($cmd);
}


//
//  Set PWM on pin
//  $chip is either 0 or 1
//  NOTE: see neo docs for more info
//  NOTE: also, you have to give r/w permission on these files
//

function setPWM($chip,$period,$duty){
  $cmd="echo 0 > /sys/class/pwm/pwmchip".$chip."/export"; // Enables PWM
  shell_exec($cmd);
  $cmd="echo ". $period ." > /sys/class/pwm/pwmchip".$chip."/pwm0/period";
  shell_exec($cmd);
  $cmd="echo ".$duty." > /sys/class/pwm/pwmchip".$chip."/pwm0/duty_cycle";
  shell_exec($cmd);
  $cmd="echo 1 > /sys/class/pwm/pwmchip".$chip."/pwm0/enable";
  shell_exec($cmd);
}

//
//  Read the values of accelerometer
//  $axis is X, Y or Z
//
function readAcc($axis,$php){
  $cmd="cat /sys/class/misc/FreescaleAccelerometer/data";
  $value=shell_exec($cmd);
  $value=explode(",",$value);
  switch ($axis) {
    case 'X':
      if($php==0)
        echo $value[0];
      else
        return $value[0];
      break;
    case 'Y':
      if($php==0)
        echo $value[1];
      else
        return $value[1];
      break;
    case 'Z':
      if($php==0)
        echo $value[2];
      else
        return $value[2];
      break;
  }
}

//
//  Read the values of gyroscope
//  $axis is X, Y or Z
//
function readGyro($axis,$php){
  $cmd="cat /sys/class/misc/FreescaleGyroscope/data";
  $value=shell_exec($cmd);
  $value=explode(",",$value);
  switch ($axis) {
    case 'X':
      if($php==0)
        echo $value[0];
      else
        return $value[0];
      break;
    case 'Y':
      if($php==0) echo $value[1];
      else
        return $value[1];
      break;
    case 'Z':
      if($php==0)
        echo $value[2];
      else
        return $value[2];
      break;
  }
}

//
//  Read the values of magnetometer
//  $axis is X, Y or Z
//
function readMag($axis,$php){
  $cmd="cat /sys/class/misc/FreescaleMagnetometer/data";
  $value=shell_exec($cmd);
  $value=explode(",",$value);
  switch ($axis) {
    case 'X':
      if($php==0)
        echo $value[0];
      else
        return $value[0];
      break;
    case 'Y':
      if($php==0)
        echo $value[1];
      else
        return $value[1];
      break;
    case 'Z':
      if($php==0)
        echo $value[2];
      else
        return $value[2];
      break;
  }
}

?>
