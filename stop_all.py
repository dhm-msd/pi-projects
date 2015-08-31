import pigpio
pi = pigpio.pi()
pi.write(27,1)
pi.write(17,1)
pi.stop()