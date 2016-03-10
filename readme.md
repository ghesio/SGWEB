# SGWEB

SGWEB is a PHP/JS framework that let you control the A9 and arduino pins of your UDOO NEO.

### Requirements
  - UDOO NEO with UDOObuntu (version used v2.0 rc1)
  - PHP capable web server
  - JQuery v2.2.0
  - Python

### Version
Initial release

### Installation

You need to set up a web server (like lamp):

```sh
$ sudo apt-get install tasksel
$ sudo apt-get install lamp-server^
```
You then need to change the default apache2 port from 80 to another (by editing `/etc/apache2/ports.conf`) or change the port of UDOO quick start.

Now you have to export GPIO (see [docs]) and give r/w permission on GPIO files (the files are `/sys/class/gpio/gpioX/value` and `/sys/class/gpio/gpioX/direction`, where X is pin number) and on serial port (`/dev/ttyMCC`), or simply use the provided bash script.

If you are not planning to use Arduino pins, you are ready to begin.

To use the arduino pinout you must use the the sketch `sgweb.ino` and the python script `sgweb.py`

### USAGE
Simply include the PHP and JS (if needed in your project files).

You can:
* Set pin as in or out
* Write 1/0 on pin
* Read value on pin (see [docs] for more informations)
* Set PWM
* Read analog value (arduino only)
* Read i2c values

See examples and files comments for more infos.

To use i2c brick sensors you need to enable them (for the one in the example, TMP75b, run `sudo sh -c 'echo lm75 0x48 > /sys/class/i2c-dev/i2c-1/device/new_device'
`)

### KNOWN ISSUES
Regarding the arduino side, if you set a pin as output (using `pinMode`) you can't use it as PWM (see [here]).

### DEVELOPED BY
Nicola Giannelli - Donato Granito

### LICENCE

The MIT License (MIT)
Copyright (c) 2016 Giannelli - Granito

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


[//]: #

   [docs]:<http://www.udoo.org/docs-neo/Hardware_&_Accessories/GPIO.html>

   [here]:   <http://www.udoo.org/docs-neo/Debugging_&_Troubleshooting/Arduino_PWM_Issue.html>
