<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



class CategoryModel
{
    private $mysqli;

    public function selectCategories()
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $result = $this->mysqli->query("SELECT * FROM partCategories");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $this->mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function showCategories()
    {
        $categories = $this->selectCategories();
        include __DIR__ . '/../views/view-categories.php';

    }

    public function insertCategory()
    {   
        $categoryName = $_REQUEST['partCategory'];
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("INSERT INTO partCategories (partCategory) VALUES ('$categoryName')");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function deleteCategory($id)
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("DELETE FROM partCategories WHERE partCategories.partCategoryID = '$id'");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function showEditForm($id, $categoryName){
        include __DIR__ . '/../views/view-categoriesEditForm.php';
       
    }

    public function updateBrand($id, $categoryName){
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("UPDATE partCategories SET partCategory = '$categoryName' WHERE partCategories.partCategoryID = '$id'");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}


?>