// var path indicates where SGWEB framework is stored
var path = 'SGWEB/gpio.php'

// AJAX callback functions, you can define your own here
function readPin(callback,pin){
  $.ajax({
      type: 'GET',
      url: path,
      data: {
          'funct': "readPin",
          'pin': pin,
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

function setPin(callback,pin,value){
  $.ajax({
      type: 'GET',
      url: path,
      data: {
          'funct': "setPin",
          'pin': pin,
          'value': value
      },
      success: function (result) {
          //console.log(result);
      },
      error: function (xhr, textStatus, error) {
          console.log(xhr);
          console.log(textStatus);
          console.log(error);
      }
  });
};

function setPinMode(callback,pin,value){
  $.ajax({
      type: 'GET',
      url: path,
      data: {
          'funct': "setPinMode",
          'pin': pin,
          'value': value
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

function readPinMode(callback,pin){
  $.ajax({
      type: 'GET',
      url: path,
      data: {
          'funct': "readPinMode",
          'pin': pin,
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

function setPWM(callback,chip,period,duty){
  $.ajax({
      type: 'GET',
      url: path,
      data: {
          'funct': "setPWM",
          'chip': chip,
          'period': period,
          'duty': duty
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

function readAcc(callback,axis){
  $.ajax({
      type: 'GET',
      url: path,
      data: {
          'funct': "readAcc",
          'axis': axis,
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

function readGyro(callback,axis){
  $.ajax({
      type: 'GET',
      url: path,
      data: {
          'funct': "readGyro",
          'axis': axis,
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

function readMag(callback,axis){
  $.ajax({
      type: 'GET',
      url: path,
      data: {
          'funct': "readMag",
          'axis': axis,
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
