<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



class BrandModel
{
    private $mysqli;

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

    public function showBrands()
    {
        $brands = $this->selectBrands();
        include __DIR__ . '/../views/view-brands.php';

    }

    public function insertBrand()
    {   
        $brandName = $_REQUEST['partBrand'];
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("INSERT INTO partBrands (partBrand) VALUES ('$brandName')");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function deleteBrand($id)
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("DELETE FROM partBrands WHERE partBrands.partBrandID = '$id'");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function showEditForm($id, $brandName){ 
        include __DIR__ . '/../views/view-brandsEditForm.php';  
    }

    public function updateBrand($id, $brandName){
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("UPDATE partBrands SET partBrand = '$brandName' WHERE partBrands.partBrandID = '$id'");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}


?>