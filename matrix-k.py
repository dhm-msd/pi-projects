import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BOARD)
MATRIX = [ [1,2,3],
				  [4,5,6],
				  [7,8,9],
				  ['*',0,'#',]	]

ROW = [5,6,13]
COL = [19,26]


for j in range(2):
		GPIO.setup(COL[j], GPIO.OUT)
		GPIO.output(COL[j], 1)

for i in range(2):
	GPIO.setup(ROW[i],GPIO.IN,pull_up_down = GPIO.PUD_UP)
	
try:
		while(True):
			for j in range(2) :
				GPIO.output(COL[j],0)
				
				for i in range(3) :
					if GPIO.input(ROW[i]) == 0:
						print MATRIX[i][j]
						while(GPIO.input(ROW[i]) == 0 ):
							pass
					
				GPIO.output(COL[j],1)
except KeyboardInterrupt:
		GPIO.cleanup();