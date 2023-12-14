<?php

include_once 'models/model-brands.php';

class Controller {
    private $model;

    public function __construct($connection) {
        $this->model = new BrandModel($connection);
    }

    public function showBrands() {
        $brands = $this->model->selectBrands();
        include 'views/view-data.php';
    }

    public function showForm(){
        include 'views/view-form.php';
    }

    public function add() {
        $brandName = $_REQUEST['partBrand'];
        //$this->model->insertBrand($brandName);
        echo "Added Brand : $brandName";
        $this->showBrands();
    }
}

$connection1 = new ConnectionObject("localhost", "tanveer_awp", "#82wtlD27", "awp_assignment1");
$controller = new Controller($connection1);

//$controller-> showBrands();


// if(isset($_POST['submit'])) {
//     $controller->add();
// } else {
//     $controller->showForm();
// }

?>