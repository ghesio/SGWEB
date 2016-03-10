<?php
require 'SGWEB/gpio.php';

$print = array(4,21,5,20,6,19,7,18,116,17,127,16,124,15,119,12,0,22,174,25,175,0,179,124,177,182,202,173,203,172,0,181,0,180,0,107,0,106);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPIO example</title>

    <link rel="stylesheet" href="gpio.css" media="screen" title="no title" charset="utf-8">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins and SGGWEB) -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <!-- GPIO JS -->
    <script src="SGWEB/gpio.js"></script>

    <script type="text/javascript">
    function setPinModeOut(pin){
      var mode = "m" + pin;
      var set1 = "h" + pin;
      var set0 = "l" + pin;
      var read = "r" + pin;
      var value = "v" + pin;
      setPinMode(function(ret){
      console.log(ret);
        $("#" + value).text("");
        $("#" + mode).text("OUT");
        $("#" + set1).removeAttr('disabled');
        $("#" + set0).removeAttr('disabled');
        $("#" + read).attr('disabled','disabled');
      },pin,"out");
    };
    function setPinModeIn(pin){
      var mode = "m" + pin;
      var set1 = "h" + pin;
      var set0 = "l" + pin;
      var read = "r" + pin;
      setPinMode(function(ret){
      console.log(ret);
      $("#" + mode).text("IN");
      $("#" + set1).attr('disabled','disabled');
      $("#" + set0).attr('disabled','disabled');
      $("#" + read).removeAttr('disabled');
      },pin,"in");
    };

    function set1(pin){
      var string = "v" + pin;
      console.log(string);
      setPin(function(ret){
      console.log(ret);
        $("#" + string).text("1");
      },pin,1);
    };

    function set0(pin){
      var string = "v" + pin;
      console.log(string);
      setPin(function(ret){
      console.log(ret);
        $("#" + string).text("0");
      },pin,0);
    };

    function readValue(pin){
      var string = "v" + pin;
      console.log(string);
      readPin(function(ret){
      console.log(ret);
        $("#" + string).text(ret);
      },pin);

    };

    function readMagX(){

      readMag(function(ret){
      console.log(ret);
        $("#magX").text(ret);
      },"X");
    };

    function readMagY(){

      readMag(function(ret){
      console.log(ret);
        $("#magY").text(ret);
      },"Y");
    };

    function readMagZ(){

      readMag(function(ret){
      console.log(ret);
        $("#magZ").text(ret);
      },"Z");
    };

    function readGyroX(){

      readMag(function(ret){
      console.log(ret);
        $("#gyroX").text(ret);
      },"X");
    };

    function readGyroY(){

      readMag(function(ret){
      console.log(ret);
        $("#gyroY").text(ret);
      },"Y");
    };

    function readGyroZ(){

      readMag(function(ret){
      console.log(ret);
        $("#gyroZ").text(ret);
      },"Z");
    };

    function readAccX(){

      readMag(function(ret){
      console.log(ret);
        $("#accX").text(ret);
      },"X");
    };

    function readAccY(){

      readMag(function(ret){
      console.log(ret);
        $("#accY").text(ret);
      },"Y");
    };

    function readAccZ(){

      readMag(function(ret){
      console.log(ret);
        $("#accZ").text(ret);
      },"Z");
    };
    </script>

    <script type="text/javascript">
    $( document ).ready(function() {
      <?php
      $js_array = json_encode($GLOBALS['gpio']);
      echo "var pins = ". $js_array . ";\n";
      ?>
      console.log( "Document ready." );
      readAccX();
      readAccY();
      readAccZ();
      readGyroX();
      readGyroY();
      readGyroZ();
      readMagX();
      readMagY();
      readMagZ()
    });
    </script>


    </head>



    <body>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="text-center">GPIO Pinout control interface</h1>
          </div>
        </div>
          <div class="row spacer"></div>
          <?php
            $i=0;
            foreach ($print as $key => $pin) {
              if ($i%2==0) {
                echo '<div class="row">';
              }
              if ($pin!=0&&$i%2==0) {
                echo '<div class="col-xs-6">
                  <button type="button" onClick="setPinModeOut('.$pin.')" id="out'.$pin.'" class="btn btn-default btn-sm">Set to OUT</button>
                  <button type="button" onClick="setPinModeIn('.$pin.')" id="in'.$pin.'" class="btn btn-default btn-sm">Set to IN</button>
                  <button type="button" onClick="set1('.$pin.')" id="h'.$pin.'" disabled="disabled" class="btn btn-default btn-sm">Set 1</button>
                  <button type="button" onClick="set0('.$pin.')" id="l'.$pin.'" disabled="disabled" class="btn btn-default btn-sm">Set 0</button>
                  <button type="button" onClick="readValue('.$pin.')" id="r'.$pin.'" disabled="disabled" class="btn btn-default btn-sm">Read Value</button>

                  <div class="gpio pull-right">
                      <p>
                      <span id="'.$pin.'">'.$pin.'</span><br />
                      <span id="m'.$pin.'">IN</span><br />
                      <span id="v'.$pin.'"><br /></span>
                      </p>
                  </div>
                </div>';
              }
              else if($pin!=0&&$i%2!=0){
                echo '<div class="col-xs-6">
                  <div class="gpio">
                      <p>
                      <span id="'.$pin.'">'.$pin.'</span><br />
                      <span id="m'.$pin.'">IN</span><br />
                      <span id="v'.$pin.'"><br /></span>
                      </p>
                  </div>
                  <div class="pull-right" style="margin-top:-70px;">


                  <button type="button" onClick="setPinModeOut('.$pin.')" id="out'.$pin.'" class="btn btn-default btn-sm">Set to OUT</button>
                  <button type="button" onClick="setPinModeIn('.$pin.')" id="in'.$pin.'" class="btn btn-default btn-sm">Set to IN</button>
                  <button type="button" onClick="set1('.$pin.')" id="h'.$pin.'" disabled="disabled" class="btn btn-default btn-sm">Set 1</button>
                  <button type="button" onClick="set0('.$pin.')" id="l'.$pin.'" disabled="disabled" class="btn btn-default btn-sm">Set 0</button>
                  <button type="button" onClick="readValue('.$pin.')" id="r'.$pin.'" disabled="disabled" class="btn btn-default btn-sm">Read Value</button>

                </div>
                </div>

                ';
                }
              else{
                echo '<div class="col-xs-6"></div>';
              }
              if ($i%2!=0) {
                echo '</div><div class="spacers"></div>';
              }
              $i++;
            }
           ?>
          <div class="spacer"></div>
            <div class="col-xs-12">
              <h2 class="text-center">Sensor data</h1>
            </div>
            <div class="row">
              <div class="col-xs-12 text-center">
                <button type="button" onClick="readAccX(); readAccY(); readAccZ(); readGyroX(); readGyroY(); readGyroZ(); readMagX(); readMagY(); readMagZ();" name="refresh">Refresh</button>
              </div>
          </div>
          <div class="row">
            <div class="col-xs-4">
                <img src="acc.png" alt="acc" /> X: <span id="accX"></span> Y: <span id="accY"></span> Z: <span id="accZ"></span>
            </div>
            <div class="col-xs-4">
                <img src="magn.png" alt="magn" /> X: <span id="magX"></span> Y: <span id="magY"></span> Z: <span id="magZ"></span>
            </div>
            <div class="col-xs-4">
                <img src="gyro.png" alt="gyro" /> X: <span id="gyroX"></span> Y: <span id="gyroY"></span> Z: <span id="gyroZ"></span>
            </div>
          </div>
          <div class="spacer"></div>
        </div>
    </body>
</html>
