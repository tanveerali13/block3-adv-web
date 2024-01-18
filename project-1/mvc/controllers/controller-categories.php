<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include __DIR__ . '/../models/model-categories.php';

$categories = new CategoryModel();


//for inserting category
if(isset($_POST['submit'])) {
    $categories->insertCategory();
    header('Location: ?page=view-categories');
    exit();
} 

//for deleting category
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['partCategoryID'])) {
    try {
        $categoryId = $_POST['partCategoryID'];
        $categories->deleteCategory($categoryId);
        header('Location: ?page=view-categories');
        exit();
    } catch (Exception $e) {
        echo '<div class="error-msg">';
        echo "Error: " . $e->getMessage();
        echo '</div>';
    }
}

//for showing edit form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit' ){
    $id = $_POST['partCategoryID'];
    $categoryName = $_POST['partCategory'];
    $categories->showEditForm($id, $categoryName);   
}

//for updating category
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'update' ){
    $id = $_POST['partCategoryID'];
    $categoryName = $_POST['partCategory'];
    $categories->updateBrand($id, $categoryName);
    header('Location: ?page=view-categories');
    exit();
}

$categories->showCategories();

?>