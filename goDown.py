#!/usr/bin/env python
import pigpio
from time import sleep
pi = pigpio.pi() # Connect to local Pi.
pi.set_mode(17, pigpio.OUTPUT);
oppositeGPIO = pi.read(27)
if oppositeGPIO == 1 :
	print("Getting Down...")
	pi.write(17,0)
	sleep(16)
	pi.write(17,1)
	pi.stop()
else : 
	print("Opposite Action in place. Aborting Action.")
	pi.stop()