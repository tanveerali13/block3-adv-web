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
            $this->fuelLevel = 80;
            echo "Car is running, fuel level = $this->fuelLevel <br>";
        } else {
            echo "Car is already running. <br>";
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

    public function reFuel()
    {
        if ($this->fuelLevel < 100) {
            $this->fuelLevel = 100;
            echo "Refuel Complete <br>";
        } else {
            echo "Tank is already full";
        }
    }

}

$car1 = new Car('Mazda3', '2011');
$car1->start();
$car1->start();
$car1->stop();
$car1->stop();
$car1->reFuel();
$car1->reFuel();




$car2 = new Car('Toyota', '2020');


