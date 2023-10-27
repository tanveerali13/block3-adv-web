<?php

ini_set("display_errors", 1);
class Car
{
    private $name;
    private $model;

    public $engineStartStop = 0;

    private $stopEngine;

    private $refuel;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setEngineStartStop($startStop)
    {
        if ($startStop == 'start') {
            $this->engineStartStop = 1;
        } else if ($startStop == 'stop') {
            $this->engineStartStop = 0;
        }
    }

    public function moveForward()
    {
        if ($this->engineStartStop == 1) {
            echo "Car is moving forward";
        } else {
            echo "Start the car first";
        }
    }
}

$car1 = new Car();
$car1->setName('Mazda3');
$car1->setModel('2011');
echo $car1->getName();
echo "<br>";
echo $car1->getModel();
echo "<br>";
$car1->setEngineStartStop('start');
echo "<br>";
echo $car1->engineStartStop;
echo "<br>";
$car1->moveForward();
$car1->setEngineStartStop('stop');
echo "<br>";
$car1->moveForward();
?>