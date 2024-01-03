<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include __DIR__ . '/../models/model-brands.php';

$brands = new BrandModel();
$brands->showBrands();

//for inserting brand
if(isset($_POST['submit'])) {
    $brands->insertBrand();
    //for reloading page without resubmission
    echo '<script>window.location.href = "?page=view-brands";</script>';
    exit();

} 

//for deleting brand
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['partBrandID'])) {
    $id = $_POST['partBrandID'];
    $brands->deleteBrand($id);
    //for reloading page without resubmission
    echo '<script>window.location.href = "?page=view-brands";</script>';
    exit();; 
}

//for showing edit form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit' ){
    $id = $_POST['partBrandID'];
    $brandName = $_POST['partBrand'];
    $brands->showEditForm($id, $brandName);   
}

//for updating brand
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'update' ){
    $id = $_POST['partBrandID'];
    $brandName = $_POST['partBrand'];
    $brands->updateBrand($id, $brandName);
    //for reloading page without resubmission
    echo '<script>window.location.href = "?page=view-brands";</script>';
    exit();
}

?>