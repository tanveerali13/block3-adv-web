<?php
class Car
{
    private $name;
    private $model;

    private $engineStartStop;

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

    public function setEngineStartStop($engineStartStop)
    {
        if ($engineStartStop == 'start') {
            $this->engineStartStop = $engineStartStop;
            $this->moveForward();
        }
    }

    private function moveForward()
    {
        echo "Car is moving forward";
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

?>