<?php

ini_set("display_errors", 1);
class Car
{
    private $name;
    private $model;
    private $turnKeyOn;
    private $engineOn;
    private $pedalPressed;
    private $isMoving;
    private $fuelLevel;

    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
        $this->turnKeyOn = false;
        $this->engineOn = false;
        $this->pedalPressed = false;
        $this->isMoving = false;
        $this->fuelLevel = 100;
    }

    public function showStatus()
    {
        echo "----------STATUS --------- <br>";
        echo "Car Name: $this->name <br>";
        echo "Car Model: $this->model <br>";
        echo "Key is turned " . ($this->turnKeyOn ? "on" : "off") . "<br>";
        echo "Engine is " . ($this->engineOn ? "running" : "off") . "<br>";
        echo "Fuel Level: $this->fuelLevel% <br>";
        echo "------------------------- <br>";
    }

    public function turnOnKey()
    {
        if (!$this->turnKeyOn) {
            $this->turnKeyOn = true;
            echo "Key turned on <br>";
            $this->startEngine();
        } else {
            echo "Engine is already running. <br>";
        }
    }

    public function turnOffKey()
    {
        if ($this->turnKeyOn) {
            $this->turnKeyOn = false;
            echo "Key turned off. <br>";
            $this->stopEngine();
        } else {
            echo "key is already turned off <br>";
        }
    }

    public function startEngine()
    {
        if ($this->turnKeyOn) {
            $this->engineOn = true;
            echo "Engine started <br>";
            $this->fuelLevel = 90;
        } else {
            echo "Turn the key first to start the engine <br>";
        }
    }

    private function stopEngine()
    {
        if (!$this->turnKeyOn) {
            $this->engineOn = false;
            echo "Engine stopped <br>";
        }
    }

    public function moveForward()
    {
        if ($this->engineOn) {
            $this->pedalPressed = true;
            $this->isMoving = true;
            echo "Car is moving forward <br>";
            $this->fuelLevel = 80;
        } else {
            echo "Start the engine first <br>";
        }
    }

    public function applyBrakes()
    {
        if ($this->isMoving) {
            $this->isMoving = false;
            echo "Brakes applied and car stopped moving. <br>";
        }
    }

    public function reFuel()
    {
        if ($this->fuelLevel < 100) {
            $this->fuelLevel = 100;
            echo "Refuel Complete. Fuel level is: $this->fuelLevel <br>";
        } else {
            echo "Tank is full <br>";
        }
    }

}

$car1 = new Car('Mazda3', '2020');

$car1->showStatus();
$car1->startEngine();
$car1->turnOnKey();
$car1->moveForward();
$car1->refuel();
$car1->applyBrakes();
$car1->turnOffKey();







