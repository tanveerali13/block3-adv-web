<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



class PartModel
{
    private $mysqli;

    public function selectParts()
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $result = $this->mysqli->query("SELECT * FROM parts
                                            NATURAL JOIN partBrands
                                            NATURAL JOIN partTypes ORDER BY partID ASC");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $this->mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function selectBrands()
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $result = $this->mysqli->query("SELECT * FROM partBrands");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $this->mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function selectTypes()
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $result = $this->mysqli->query("SELECT * FROM partTypes");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $this->mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function showParts()
    {   
        $parts = $this->selectParts();
        $brands = $this->selectBrands();
        $types = $this->selectTypes();
        include __DIR__ . '/../views/view-parts.php';

    }

    public function insertPart()
    {   
        $partName = $_REQUEST['partName'];
        $partType = $_POST['partType'];
        $partBrand = $_POST['partBrand'];
        $partPrice = $_POST['partPrice'];
        $partStock = $_POST['partStock'];

        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("INSERT INTO parts (partName, partTypeID, partBrandID, partPrice, partStock) VALUES ('$partName', '$partType', '$partBrand', '$partPrice', '$partStock')");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function deletePart($id)
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("DELETE FROM parts WHERE parts.partID = '$id'");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function showEditForm($id, $partName, $partType, $partBrand, $partPrice, $partStock){
        $parts = $this->selectParts();
        $brands = $this->selectBrands();
        $types = $this->selectTypes();
        include __DIR__ . '/../views/view-partsEditForm.php';  
    }

    public function updatePart($id, $partName, $partType, $partBrand, $partPrice, $partStock){
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("UPDATE parts SET partName = '$partName',
                                                    partTypeID = '$partType', 
                                                    partBrandID = '$partBrand', 
                                                    partPrice = '$partPrice', 
                                                    partStock = '$partStock' 
                                                    WHERE parts.partID = '$id'");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}


?>