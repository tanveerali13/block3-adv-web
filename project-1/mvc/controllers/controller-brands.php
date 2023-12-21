<?php

include_once 'models/model-brands.php';

class Controller
{
    private $model;

    public function __construct($connection)
    {
        $this->model = new BrandModel($connection);
    }

    public function showBrands()
    {
        $brands = $this->model->selectBrands();
        include 'views/view-data.php';
    }

    public function showForm()
    {
        include 'views/view-form.php';
    }

    public function add()
    {
        $brandName = $_REQUEST['partBrand'];
        if ($this->model->insertBrand($brandName)) {
            echo "Added Brand : $brandName </br>";
        } else {
            echo "Could not add brand";
        }
    }

    public function delete($id)
    {
        if ($this->model->deleteBrand($id)) {
            $this->showBrands();
        } else {
            echo "Couldn't delete item";
        }
    }
}


$connection1 = new ConnectionObject("localhost", "tanveer_awp", "#82wtlD27", "awp_assignment1");
$controller = new Controller($connection1);

$controller->showForm();

if (isset($_POST['submit'])) {
    $controller->add();
    $controller->showBrands();
} else if (isset($_GET['partBrandID'])) {
    $controller->delete($_GET['partBrandID']);
} 

echo $_GET['partBrandID'];

?>