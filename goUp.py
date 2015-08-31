#!/usr/bin/env python
import pigpio
from time import sleep
pi = pigpio.pi() # Connect to local Pi.
pi.set_mode(27, pigpio.OUTPUT);
oppositeGPIO = pi.read(17)
if oppositeGPIO == 1 :
	print("Getting Up...")
	pi.write(27,0)
	sleep(16)
	pi.write(27,1)
	pi.stop()
else :
	print("Opposite Action in place. Aborting Action.")
	pi.stop()