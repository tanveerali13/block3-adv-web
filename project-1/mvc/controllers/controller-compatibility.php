<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include __DIR__ . '/../models/model-compatibility.php';

$compatibilities = new CompatibilityModel();


//for inserting compatibility
if(isset($_POST['submit'])) {
    $compatibilities->insertCompatibility();
    header('Location: ?page=view-compatibility');
    exit();

} 

//for deleting compatibility
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['partCompatibilityID'])) {
    try {
        $compatibilityId = $_POST['partCompatibilityID'];
        $compatibilities->deleteCompatibility($compatibilityId);
        header('Location: ?page=view-compatibility');
        exit();
    } catch (Exception $e) {
        echo '<div class="error-msg">';
        echo "Error: " . $e->getMessage();
        echo '</div>';
    }
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
    header('Location: ?page=view-compatibility');
    exit();
}

$compatibilities->showCompatibilities();

?>