<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



class CompatibilityModel
{
    private $mysqli;

    public function selectCompatibilities()
    {   
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $result = $this->mysqli->query("SELECT * FROM partCompatibility ORDER BY partCompatibilityID DESC");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $this->mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function showCompatibilities()
    {
        $compatibilities = $this->selectCompatibilities();
        include __DIR__ . '/../views/view-compatibility.php';

    }

    public function insertCompatibility()
    {   
        $compatibilityName = $_REQUEST['partCompatibility'];
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("INSERT INTO partCompatibility (partCompatibility) VALUES ('$compatibilityName')");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function deleteCompatibility($compatibilityId)
    {
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
    
        if ($this->mysqli) {
            try {
                $stmt = $this->mysqli->prepare("DELETE FROM partCompatibility WHERE partCompatibilityID = ?");
                $stmt->bind_param("i", $compatibilityId);
    
                if ($stmt->execute()) {
                    return true;
                } else {
                    throw new Exception("Error deleting compatibility.");
                }
            } catch (mysqli_sql_exception $e) {
                throw new Exception("Cannot delete compatibility due to existing constraints.");
            } finally {
                $stmt->close();
                $this->mysqli->close();
            }
        } else {
            return false;
        }
    }
    

    public function showEditForm($id, $compatibilityName){ 
        include __DIR__ . '/../views/view-compatibilityEditForm.php';  
    }

    public function updateCompatibility($id, $compatibilityName){
        $this->mysqli = new mysqli("localhost", "tanveer_awp", "Cvcd317&0", "awp_assignment1");
        if ($this->mysqli) {
            $this->mysqli->query("UPDATE partCompatibility SET partCompatibility = '$compatibilityName' WHERE partCompatibility.partCompatibilityID = '$id'");
            $this->mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}


?>