<?php
include_once 'models/model.php';

class Controller {
    private $model;
    public function __construct($connection) {
        $this->model = new UserModel($connection);
    }

    public function showUsers() {
        $users = $this->model->selectUsers();
        include 'views/home.php';
    }

    public function showForm() {
        include 'views/form.php';
    }

    public function add() {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        //$this->model->insertUser($name, $email, $address);
        echo "Added user : $name, $email, $address";
        $this->showUsers();
    }
}


$connection1 = new ConnectionObject("localhost", "tanveerali", "s%7i5c39Z", "awp_tanveer");
$controller = new Controller($connection1);

//$controller->start();
$controller->showForm();

if(isset($_POST['submit'])) {
    $controller->add();
} else {
    $controller->showForm();
}

?>