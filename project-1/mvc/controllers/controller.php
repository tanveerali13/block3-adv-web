<?php

    if(isset($_GET['page'])){
        if($_GET['page'] == 'view-brands'){
            include __DIR__ . '/../controllers/controller-brands.php';
        }else if($_GET['page'] == 'view-categories'){
            include __DIR__ . '/../controllers/controller-categories.php';
        }else if($_GET['page'] == 'view-compatibility'){
            include __DIR__ . '/../controllers/controller-compatibility.php';
        }else if($_GET['page'] == 'view-types'){
            include __DIR__ . '/../controllers/controller-types.php';
        }else if($_GET['page'] == 'view-parts'){
            include __DIR__ . '/../controllers/controller-parts.php';
        }
    }

?>