import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BOARD)
GPIO.setup(22, GPIO.OUT)

GPIO.output(22, 0)
time.sleep(0.0000001)
GPIO.output(22, 1)
time.sleep(0.0000001)
GPIO.output(22, 0)
time.sleep(0.0000001)
GPIO.output(22, 1)
time.sleep(0.0000001)

