#!/usr/bin/env python
import pigpio
import sys
from time import sleep
try:
    thePinNum = int(sys.argv[1])
except IndexError:
	print("Missing Pin Num")
else :
	pi = pigpio.pi() # Connect to local Pi.
	pi.set_mode(thePinNum, pigpio.OUTPUT);
	GPIOstatus = pi.read(thePinNum)
	if GPIOstatus == 1 :
		print("Switching pin "+ str(thePinNum) + " to 0")
		pi.write(thePinNum,0)
		pi.stop()
	else :
		print("Switching pin "+ str(thePinNum) + " to 1")
		pi.write(thePinNum,1)
		pi.stop()