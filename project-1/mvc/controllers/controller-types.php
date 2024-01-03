<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include __DIR__ . '/../models/model-types.php';

$types = new TypeModel();
$types->showTypes();

//for inserting part
if(isset($_POST['submit'])) {
    $types->insertType();
    //for reloading page without resubmission
    echo '<script>window.location.href = "?page=view-types";</script>';
    exit();

} 

//for deleting part
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['partTypeID'])) {
    $id = $_POST['partTypeID'];
    $types->deleteType($id);
    //for reloading page without resubmission
    echo '<script>window.location.href = "?page=view-types";</script>';
    exit();; 
}

//for showing edit form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit' ){
    $id = $_POST['partTypeID'];
    $partType = $_POST['partType'];
    $partCompatibility = $_POST['partCompatibility'];
    $partCategory = $_POST['partCategory'];

    
    $types->showEditForm($id, $partType, $partCompatibility, $partCategory);   
}

//for updating part
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'update' ){
    $id = $_POST['partTypeID'];
    $partType = $_POST['partType'];
    $partCompatibility = $_POST['partCompatibility'];
    $partCategory = $_POST['partCategory'];

    $types->updateType($id, $partType, $partCompatibility, $partCategory);
    //for reloading page without resubmission
    echo '<script>window.location.href = "?page=view-types";</script>';
    exit();
}

?>