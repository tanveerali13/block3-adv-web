<?php

include_once 'models/model-connection.php';

class BrandModel
{

    private $mysqli;
    private $connectionObject;
    public function __construct($connectionObject)
    {
        $this->connectionObject = $connectionObject;
    }

    public function connect()
    {
        try {
            $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);

            if ($mysqli->connect_error) {
                throw new Exception('Could not connect');
            }
            return $mysqli;
        } catch (Exception $e) {
            return false;
        }
    }

    public function selectBrands()
    {

        $mysqli = $this->connect();
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM partBrands");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }

    }

    public function insertBrand($brandName)
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("INSERT INTO partBrands (partBrand) VALUES ('$brandName')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function deleteBrand($id)
    {   
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("DELETE FROM partBrands WHERE partBrands.partBrandID = $id");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}


?>