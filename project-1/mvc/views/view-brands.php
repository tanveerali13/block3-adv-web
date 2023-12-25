<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        if ($brands) {
            echo '<table border="1">';
            echo '<tr><th>ID</th><th>Brand</th><th>Action</th></tr>';

            foreach ($brands as $brand) {
                echo '<tr>';
                echo '<td>' . $brand['partBrandID'] . '</td>';
                echo '<td>' . $brand['partBrand'] . '</td>';
                echo '<td>';

                // Edit Button
                echo '<form action="" method="post" style="display:inline;">';
                echo '<input type="hidden" name="action" value="edit">';
                echo '<input type="hidden" name="partBrandID" value="' . $brand['partBrandID'] . '">';
                echo '<input type="hidden" name="partBrand" value="' . $brand['partBrand'] . '">';
                echo '<button type="submit">Edit</button>';
                echo '</form>';

                // Delete Button
                echo '<form action="" method="post" style="display:inline;">';
                echo '<input type="hidden" name="action" value="delete">';
                echo '<input type="hidden" name="partBrandID" value="' . $brand['partBrandID'] . '">';
                echo '<button type="submit">Delete</button>';
                echo '</form>';

                echo '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No brands found';
        }

    ?>

</body>
</html>
