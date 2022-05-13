import RPi.GPIO as GPIO
import time
from itertools import repeat
GPIO.setmode(GPIO.BOARD)
GPIO.setup(22, GPIO.OUT)

for i in repeat(None, 10000):
  GPIO.output(22, 1)
  time.sleep(0.0000001)
  GPIO.output(22, 0)
  time.sleep(0.0000001)


