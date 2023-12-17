<?php

if ($brands) {
    foreach ($brands as $brand) {
        echo $brand['partBrandID'] . ' ' . $brand['partBrand'] . '<br>';
    }
} else {
    echo 'No brands found';
}

?>