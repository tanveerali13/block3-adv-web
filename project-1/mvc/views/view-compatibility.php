<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Insert new Compatibility</h3>
    <form action="" method="POST">
        <input type="text" name="partCompatibility" placeholder="Compatibility Name">
        <input type="submit" name="submit" placeholder="Submit">
        <input type="reset" name="reset" placeholder="Reset">

    </form>
    <br>

    <?php
        
        if ($compatibilities) {
            echo '<table border="1">';
            echo '<tr><th>ID</th><th>Compatibility</th><th>Action</th></tr>';

            foreach ($compatibilities as $compatibility) {
                echo '<tr>';
                echo '<td>' . $compatibility['partCompatibilityID'] . '</td>';
                echo '<td>' . $compatibility['partCompatibility'] . '</td>';
                echo '<td>';

                // Edit Button
                echo '<form action="" method="post" style="display:inline;">';
                echo '<input type="hidden" name="action" value="edit">';
                echo '<input type="hidden" name="partCompatibilityID" value="' . $compatibility['partCompatibilityID'] . '">';
                echo '<input type="hidden" name="partCompatibility" value="' . $compatibility['partCompatibility'] . '">';
                echo '<button type="submit">Edit</button>';
                echo '</form>';

                // Delete Button
                echo '<form action="" method="post" style="display:inline;">';
                echo '<input type="hidden" name="action" value="delete">';
                echo '<input type="hidden" name="partCompatibilityID" value="' . $compatibility['partCompatibilityID'] . '">';
                echo '<button type="submit">Delete</button>';
                echo '</form>';

                echo '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No compatibilities found';
        }

    ?>

</body>
</html>
