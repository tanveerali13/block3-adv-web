<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include __DIR__ . '/../models/model-brands.php';

$brands = new BrandModel();


//for inserting brand
if(isset($_POST['submit'])) {
    $brands->insertBrand();
    header('Location: ?page=view-brands');
    exit();

} 

//for deleting brand
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['partBrandID'])) {
    try {
        $id = $_POST['partBrandID'];
        $brands->deleteBrand($id);
        header('Location: ?page=view-brands');
        exit();
    } catch (Exception $e) {
        echo '<div class="error-msg">';
        echo "Error: " . $e->getMessage();
        echo '</div>';
    }
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
    header('Location: ?page=view-brands');
    exit();
}

$brands->showBrands();

?>