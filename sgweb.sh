#!/bin/bash
#
# SGWEB - bash.sh
# Use this files to give permissions on files that will be used by SGWEB framework
# Note: chmod 777 - R not working on /sys/class/gpio
#
# Export all GPIO pins
echo 4 > /sys/class/gpio/export
echo 5 > /sys/class/gpio/export
echo 6 > /sys/class/gpio/export
echo 7 > /sys/class/gpio/export
echo 116 > /sys/class/gpio/export
echo 127 > /sys/class/gpio/export
echo 124 > /sys/class/gpio/export
echo 119 > /sys/class/gpio/export
echo 174 > /sys/class/gpio/export
echo 174 > /sys/class/gpio/export
echo 176 > /sys/class/gpio/export
echo 177 > /sys/class/gpio/export
echo 202 > /sys/class/gpio/export
echo 203 > /sys/class/gpio/export
echo 21 > /sys/class/gpio/export
echo 20 > /sys/class/gpio/export
echo 19 > /sys/class/gpio/export
echo 18 > /sys/class/gpio/export
echo 17 > /sys/class/gpio/export
echo 16 > /sys/class/gpio/export
echo 15 > /sys/class/gpio/export
echo 14 > /sys/class/gpio/export
echo 22 > /sys/class/gpio/export
echo 25 > /sys/class/gpio/export
echo 124 > /sys/class/gpio/export
echo 182 > /sys/class/gpio/export
echo 173 > /sys/class/gpio/export
echo 173 > /sys/class/gpio/export
echo 181 > /sys/class/gpio/export
echo 180 > /sys/class/gpio/export
echo 107 > /sys/class/gpio/export
echo 106 > /sys/class/gpio/export

# Give permissions for every GPIO
cd /sys/class/gpio/gpio4
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio5
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio6
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio7
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio116
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio127
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio124
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio119
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio174
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio174
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio176
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio177
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio202
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio203
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio21
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio20
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio19
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio18
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio17
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio16
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio15
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio14
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio22
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio25
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio124
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio182
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio173
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio173
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio181
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio180
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio107
chmod 777 direction
chmod 777 value
cd /sys/class/gpio/gpio106
chmod 777 direction
chmod 777 value

# Give PHP permisson to use serial
chmod 777 /dev/ttyMCC

# Enable accelerometer, magnetometer, gyroscope
echo 1 > /sys/class/misc/FreescaleAccelerometer/enable
echo 1 > /sys/class/misc/FreescaleMagnetometer/enable
echo 1 > /sys/class/misc/FreescaleGyroscope/enable
