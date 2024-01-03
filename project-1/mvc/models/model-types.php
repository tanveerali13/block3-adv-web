<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



class TypeModel
{
    private $mysqli;

    public function selectTypes()
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $result = $this->mysqli->query("SELECT * FROM partTypes
                                            NATURAL JOIN partCompatibility
                                            NATURAL JOIN partCategories ORDER BY partTypeID ASC");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            echo
            $this->mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function selectCompatibility()
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $result = $this->mysqli->query("SELECT * FROM partCompatibility");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $this->mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function selectCategory()
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

    public function showTypes()
    {   
        $types = $this->selectTypes();
        $compatibilities = $this->selectCompatibility();
        $categories = $this->selectCategory();
        include __DIR__ . '/../views/view-types.php';

    }

    public function insertType()
    {   
        $partType = $_POST['partType'];
        $partCompatibility = $_POST['partCompatibility'];
        $partCategory = $_POST['partCategory'];

        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("INSERT INTO partTypes (partType, partCompatibilityID, partCategoryID) VALUES ('$partType', '$partCompatibility', '$partCategory')");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function deleteType($id)
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("DELETE FROM partTypes WHERE partTypes.partTypeID = '$id'");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function showEditForm($id, $partType, $partCompatibility, $partCategory){
        $types = $this->selectTypes();
        $compatibilities = $this->selectCompatibility();
        $categories = $this->selectCategory();
        include __DIR__ . '/../views/view-typesEditForm.php';  
    }

    public function updateType($id, $partType, $partCompatibility, $partCategory){
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("UPDATE partTypes SET partType = '$partType',
                                                    partCompatibilityID = '$partCompatibility', 
                                                    partCategoryID = '$partCategory' 
                                                    WHERE partTypes.partTypeID = '$id'");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}


?>