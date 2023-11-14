<!-- ### PROBLEM 1 ###
     Write a php class called Animal with a method called makeSound(). Create a subclass called Cat that overrides the makeSound() method to bark.
    
    

    ### PROBLEM 4 ###
    Write a php class called Employee with methods called work() and getSalary(). Create a subclass called HRManager that overrides the work() method and adds a new method called addEmployee().

    ### PROBLEM 5 ###
    Write a php class known as "BankAccount" with methods called deposit() and withdraw(). Create a subclass called SavingsAccount that overrides the withdraw() method to prevent withdrawals if the account balance falls below one hundred.

    ### PROBLEM 6 ###
    Write a php class called Animal with a method named move(). Create a subclass called Cheetah that overrides the move() method to run.

    ### PROBLEM 7 ###
    Write a php class known as Person with methods called getFirstName() and getLastName(). Create a subclass called Employee that adds a new method named getEmployeeId() and overrides the getLastName() method to include the employee's job title.

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
            echo 'sound';
        }
    }

    class Cat extends Animal{
        public function makeSound(){
            echo 'Meow';
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
            echo 'driving';
        }
    }

    class Car extends Vehicle{
        public function drive(){
            echo 'Repairing a car';
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
            echo 'Generic Area';
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
        }
    }

    $genericShape = new Shape();
    $genericShape->getArea();

    $rectangleArea = new Rectangle(5,10);
    $rectangleArea->getArea();


?>



