<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include __DIR__ . '/../models/model-categories.php';

$categories = new CategoryModel();


//for inserting brand
if(isset($_POST['submit'])) {
    $categories->insertCategory();
    //for reloading page without resubmission
    header('Location: ?page=view-categories');
    //echo '<script>window.location.href = "?page=view-categories";</script>';
    exit();
} 

//for deleting brand
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['partCategoryID'])) {
    $id = $_POST['partCategoryID'];
    $categories->deleteCategory($id);
    //for reloading page without resubmission
    header('Location: ?page=view-categories');
    //echo '<script>window.location.href = "?page=view-categories";</script>';
    exit();; 
}

//for showing edit form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit' ){
    $id = $_POST['partCategoryID'];
    $categoryName = $_POST['partCategory'];
    $categories->showEditForm($id, $categoryName);   
}

//for updating brand
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'update' ){
    $id = $_POST['partCategoryID'];
    $categoryName = $_POST['partCategory'];
    $categories->updateBrand($id, $categoryName);
    //for reloading page without resubmission
    header('Location: ?page=view-categories');
    //echo '<script>window.location.href = "?page=view-categories";</script>';
    exit();
}

$categories->showCategories();

?>