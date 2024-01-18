<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

    <div class="form">
        <h3>Insert New Compatibility</h3>
        <form action="" method="POST" class="form-flex">
            <input type="text" name="partCompatibility" placeholder="Compatibility Name" required>
            <input type="submit" name="submit" placeholder="Submit">
            <input type="reset" name="reset" placeholder="Reset">
        
    </div>
    

    <?php
            if ($compatibilities) {
                echo '<table class="table table-bordered">';
                echo '<thead class="thead-dark">';
                echo '<tr><th>ID</th><th>Compatibility</th><th>Action</th></tr>';
                echo '</thead>';
                echo '<tbody>';

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
                    echo '<button class="btn btn-primary" type="submit">Edit</button>';
                    echo '</form>';

                    // Delete Button
                    echo '<form action="" method="post" style="display:inline;">';
                    echo '<input type="hidden" name="action" value="delete">';
                    echo '<input type="hidden" name="partCompatibilityID" value="' . $compatibility['partCompatibilityID'] . '">';
                    echo '<button class="btn btn-danger" type="submit">Delete</button>';
                    echo '</form>';

                    echo '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<div class="alert alert-info">No compatibilities found</div>';
            }
        ?>

</body>
</html>
