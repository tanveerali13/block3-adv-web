<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <h3>Insert new Brand</h3>
    <form action="" method="POST">
        <input type="text" name="partBrand" placeholder="Brand Name">
        <input type="submit" name="submit" placeholder="Submit">
        <input type="reset" name="reset" placeholder="Reset">

    </form>
    <br>

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
                echo '<button id="edit-btn" type="submit">Edit</button>';
                echo '</form>';

                // Delete Button
                echo '<form action="" method="post" style="display:inline;">';
                echo '<input type="hidden" name="action" value="delete">';
                echo '<input type="hidden" name="partBrandID" value="' . $brand['partBrandID'] . '">';
                echo '<button id="delete-btn" type="submit">Delete</button>';
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
