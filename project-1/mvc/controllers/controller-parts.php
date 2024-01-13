<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include __DIR__ . '/../models/model-parts.php';

$parts = new PartModel();


//for inserting part
if(isset($_POST['submit'])) {
    $parts->insertPart();
    //for reloading page without resubmission
    header('Location: ?page=view-parts');
    //echo '<script>window.location.href = "?page=view-parts";</script>';
    exit();

} 

//for deleting part
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['partID'])) {
    $id = $_POST['partID'];
    $parts->deletePart($id);
    //for reloading page without resubmission
    header('Location: ?page=view-parts');
    //echo '<script>window.location.href = "?page=view-parts";</script>';
    exit();; 
}

//for showing edit form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit' ){
    $id = $_POST['partID'];
    $partName = $_POST['partName'];
    $partType = $_POST['partType'];
    $partBrand = $_POST['partBrand'];
    $partPrice = $_POST['partPrice'];
    $partStock = $_POST['partStock'];
    
    $parts->showEditForm($id, $partName, $partType, $partBrand, $partPrice, $partStock);   
}



//for updating part
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'update' ){
    $id = $_POST['partID'];
    $partName = $_POST['partName'];
    $partType = $_POST['partType'];
    $partBrand = $_POST['partBrand'];
    $partPrice = $_POST['partPrice'];
    $partStock = $_POST['partStock'];

    $parts->updatePart($id, $partName, $partType, $partBrand, $partPrice, $partStock);
    //for reloading page without resubmission
    header('Location: ?page=view-parts');
    //echo '<script>window.location.href = "?page=view-parts";</script>';
    exit();
}

$parts->showParts();

?>