#!/usr/bin/env python
import sys
import pigpio

pi = pigpio.pi() # Connect to local Pi.

try:
    thePort = int(sys.argv[1])
except IndexError:
	theStatus_down = pi.read(17)
	theStatus_up = pi.read(27)
	if theStatus_down == 1:
		print("Down switch : OFF <br>")
	else :
		print("Down switch : ON <br>")
	if theStatus_up == 1:
		print("Up switch : OFF <br>")
	else : 
		print("Up switch : ON <br>")	
else:
	if thePort == 1 :
		#Run this when first load to get all GPIO status
		return_data = ""
		gpio_list=[2,3,4,17,27,22,10,9,11,5,6,13,19,26,14,15,18,23,24,25,8,7,12,16,20,21]
		for gpio_x in gpio_list:
			gpio_status = pi.read(gpio_x)
			return_data = return_data + str(gpio_x) +":" + str(gpio_status)+" "
		print return_data
	else:
		theStatus = pi.read(thePort)
		print("Gpio "+thePort+" status: "+ str(theStatus))