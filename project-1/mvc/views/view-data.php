<?php

if ($brands) {
    foreach ($brands as $brand) {
        echo $brand['partBrandID'] . ' ' . $brand['partBrand'] . ' ' .
            '<a id="editBtn" href="controllers/controller-brands.php?partBrandID=' . $brand['partBrandID'] . '">Edit</a>' . '  ' .
            '<a id="deleteBtn" href="controllers/controller-brands.php?partBrandID=' . $brand['partBrandID'] . '">Delete</a><br>';
    }
} else {
    echo 'No brands found';
}

?>