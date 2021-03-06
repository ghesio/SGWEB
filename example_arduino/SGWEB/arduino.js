var path = 'SGWEB/arduino.php'

// AJAX callback functions, you can define your own here
function SendCommand(callback,funct,pin,param){
  $.ajax({
      type: 'GET',
      url: path,
      data: {
          'get': 1,
          'funct': funct,
          'pin': pin,
          'param': param,
          'php': 0
      },
      success: function (result) {
          //console.log(result);
          callback(result);
      },
      error: function (xhr, textStatus, error) {
          console.log(xhr);
          console.log(textStatus);
          console.log(error);
      }
  });
};
