#!/usr/bin/python
# SGWEB- sgweb.,py
# Receive from arduino.php the serial string that has to be written in serial bus
#
# String sent to serial has this format
# x:y:z
# x=sys.argv[1]
# y=sys.argv[2]
# z=sys.argv[3]
import serial #serial library
import sys #used to read argument from shell
ser = serial.Serial('/dev/ttyMCC', 115200)  # open serial port
stringa = sys.argv[1] + ':' + sys.argv[2] + ':' +  sys.argv[3]
ser.write(stringa.encode())     # write a string
if (sys.argv[1] == "i" and (sys.argv[3] == "a" or sys.argv[3] == "d")):
	line = ser.readline()
	print line
ser.close()             # close port
