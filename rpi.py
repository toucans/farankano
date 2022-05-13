import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BOARD)
GPIO.setup(22, GPIO.OUT)

for i in xrange(10000):
  GPIO.output(22, 1)
  time.sleep(0.0000001)
  GPIO.output(22, 0)
  time.sleep(0.0000001)


