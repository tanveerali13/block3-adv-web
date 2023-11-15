<!-- 
    





   

    ### PROBLEM 8 ###
    Write a php class called Shape with methods called getPerimeter() and getArea(). Create a subclass called Circle that overrides the getPerimeter() and getArea() methods to calculate the area and perimeter of a circle.

    ### PROBLEM 9 ###
    Write a php cehicle class hierarchy. The base class should be Vehicle, with subclasses Truck, Car and Motorcycle. Each subclass should have properties such as make, model, year, and fuel type. Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.

    ### PROBLEM 10 ###
    Write a php ca class hierarchy for employees of a company. The base class should be Employee, with subclasses Manager, Developer, and Programmer. Each subclass should have properties such as name, address, salary, and job title. Implement methods for calculating bonuses, generating performance reports, and managing projects.-->

<?php
    ini_set('display_errors', 1);

    class Animal{
        public function makeSound(){
            echo 'Animal Sound </br>';
        }
    }

    class Cat extends Animal{
        public function makeSound(){
            echo 'Meow </br>';
        }
    }

$cat = new Cat();
$cat->makeSound();

?>


<!-- ### PROBLEM 2 ###
    Write a php class called Vehicle with a method called drive(). Create a subclass called Car that overrides the drive() method to print "Repairing a car". -->
<?php
    ini_set('display_error', 1);

    class Vehicle{
        public function drive(){
            echo "driving </br>";
        }
    }

    class Car extends Vehicle{
        public function drive(){
            echo "Repairing a car </br>";
        }
    }

    $car = new Vehicle();
    $car->drive();
?>


<!-- ### PROBLEM 3 ###
    Write a php class called Shape with a method called getArea(). Create a subclass called Rectangle that overrides the getArea() method to calculate the area of a rectangle.  -->
<?php 
    class Shape{


        public function getArea(){
            echo "Generic Area </br>";
        }
    }
    class Rectangle extends Shape{

        private $width;
        private $length;

        public function __construct($width, $length){
            $this->width = $width;
            $this->length = $length;
        }
        public function getArea(){
            echo "Rectangle Area =". $this->width * $this->length;
            echo "</br>";
        }
    }

    $genericShape = new Shape();
    $genericShape->getArea();

    $rectangleArea = new Rectangle(5,10);
    $rectangleArea->getArea();

?>

    <!-- ### PROBLEM 4 ###
    Write a php class called Employee with methods called work() and getSalary(). Create a subclass called HRManager that overrides the work() method and adds a new method called addEmployee(). -->
<?php
    class Employee{
        public function work(){
            echo "Employee is Working </br>";
        }

        public function getSalary(){
            echo "Employee salary is 3000 </br>";
        }
    }

    class HRManager extends Employee{
        public function work(){
            echo "HR is working </br>";
        }

        public function addEmployee(){
            echo "New Employee Added </br>";
        }
    }

    $employee = new Employee;
    $employee->work();

    $HR = new HRManager;
    $HR->work();
    $HR->addEmployee();

?>


    <!-- ### PROBLEM 5 ###
    Write a php class known as "BankAccount" with methods called deposit() and withdraw(). Create a subclass called SavingsAccount that overrides the withdraw() method to prevent withdrawals if the account balance falls below one hundred. -->

<?php
    class BankAccount{
        protected $balance;
        public function __construct($amount){
            $this->balance = $amount;
        }

        public function deposit($amount){
            $this->balance+= $amount;
            echo $amount."$ Deposited Successfully </br>";
        }

        public function withdrawl($amount){
            if($amount <= $this->balance){
                $this->balance-=$amount;
                echo $amount."$ Withdrawn Successfully. </br>";
            }
            else{
                echo "Insufficient funds. </br>";
            }
        }
    }

    class SavingsAccount extends BankAccount{
 
        public function withdrawl($amount){
            if($this->balance - $amount >= 100){
                $this->balance -= $amount;
                echo $amount."$ Withdrawn Successfully. </br>";
            }
            else{
                echo "Insufficient funds </br>";
            }
        }
    }

    // $account = new BankAccount(100);
    // $account->withdrawl(50);

    $savingsAccount = new SavingsAccount(200);
    $savingsAccount->withdrawl(100);

?>

    <!-- ### PROBLEM 6 ###
    Write a php class called Animal with a method named move(). Create a subclass called Cheetah that overrides the move() method to run. -->

<?php

    class Animall{
        public function move(){
            echo "Animal is moving <br>";
        }
    }
    class Cheetah extends Animall{
        public function move(){
            echo "Run <br>";
        }
    }
    
    $animal = new Animall();
    $animal->move();

    $cheetah = new Cheetah();
    $cheetah->move();
    

?>


<!-- ### PROBLEM 7 ###
    Write a php class known as Person with methods called getFirstName() and getLastName(). Create a subclass called Employee that adds a new method named getEmployeeId() and overrides the getLastName() method to include the employee's job title. -->

<?php


?>