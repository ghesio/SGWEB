/*
SGWEB - i2c.js
This file let you use AJAX to call i2c.php functions
*/

// AJAX callback functions, you can define your own here
function ReadI2c(callback,file){
  $.ajax({
      type: 'GET',
      url: path,
      data: {
          'get': 1,
          'file': file,
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
