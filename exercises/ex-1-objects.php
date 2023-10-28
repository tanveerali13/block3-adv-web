<?php

ini_set("display_errors", 1);
class Car
{
    private $name;
    private $year;
    private $isRunning;
    private $fuelLevel;

    public function __construct($name, $year)
    {
        $this->name = $name;
        $this->year = $year;
        $this->isRunning = false;
        $this->fuelLevel = 100;
    }

    public function status()
    {
        echo "Car name = $this->name <br>
              Make year = $this->year <br>
              Fuel level = $this->fuelLevel <br>
              The car is not running <br>";

    }

    public function start()
    {
        if (!$this->isRunning) {
            $this->turnOnKey();
            $this->isRunning = true;
            echo "Car is running <br>";
        } else {
            echo "Turn the key to start. <br>";
        }
    }

    private function turnOnKey()
    {
        echo "Key turned ON <br>";
        $this->accelerate();
    }

    private function accelerate()
    {
        echo "Accelerator pressed! <br>";
    }

    public function stop()
    {
        if ($this->isRunning) {
            $this->brake();
            $this->isRunning = false;
            echo "The car stopped <br>";
            $this->turnOffKey();
        } else {
            echo "Car is alredy on halt. Start the car first. <br>";
        }
    }

    private function brake()
    {
        echo "Brakes applied! <br>";
    }

    private function turnOffKey()
    {
        echo "Key turned OFF <br>";
    }

}

$car1 = new Car('Mazda3', '2011');
$car1->status();
$car1->start();
$car1->stop();
$car1->stop();
$car1->start();

$car2 = new Car('Toyota', '2020');
$car2->status();
$car2->start();
$car2->stop();

