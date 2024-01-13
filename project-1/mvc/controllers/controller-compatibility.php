<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include __DIR__ . '/../models/model-compatibility.php';

$compatibilities = new CompatibilityModel();


//for inserting compatibility
if(isset($_POST['submit'])) {
    $compatibilities->insertCompatibility();
    //for reloading page without resubmission
    header('Location: ?page=view-compatibility');
    //echo '<script>window.location.href = "?page=view-compatibility";</script>';
    exit();

} 

//for deleting compatibility
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['partCompatibilityID'])) {
    $id = $_POST['partCompatibilityID'];
    $compatibilities->deleteCompatibility($id);
    //for reloading page without resubmission
    header('Location: ?page=view-compatibility');
    //echo '<script>window.location.href = "?page=view-compatibility";</script>';
    exit();; 
}

//for showing edit form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit' ){
    $id = $_POST['partCompatibilityID'];
    $compatibilityName = $_POST['partCompatibility'];
    $compatibilities->showEditForm($id, $compatibilityName);   
}



//for updating compatibility
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'update' ){
    $id = $_POST['partCompatibilityID'];
    $compatibilityName = $_POST['partCompatibility'];
    $compatibilities->updateCompatibility($id, $compatibilityName);
    //for reloading page without resubmission
    header('Location: ?page=view-compatibility');
    //echo '<script>window.location.href = "?page=view-compatibility";</script>';
    exit();
}

$compatibilities->showCompatibilities();

?>