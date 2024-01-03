<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Insert new type</h3>
    <form action="" method="POST">
        <input type="text" name="partType" placeholder="Part Type">

        <select name="partCompatibility" required>
                <option value="">Compatiblity</option>
                <?php
                    if ($compatibilities) {
                    foreach ($compatibilities as $compatibility) {
                        echo '<option value="' . $compatibility['partCompatibilityID'] . '">' . $compatibility['partCompatibility'] . '</option>';
                        }
                    }
                ?>
            </select>

            <select name="partCategory" required>
                <option value="">Category</option>
                <?php
                    if ($categories) {
                    foreach ($categories as $category) {
                        echo '<option value="' . $category['partCategoryID'] . '">' . $category['partCategory'] . '</option>';
                        }
                    }
                ?>
            </select>

        <input type="submit" name="submit" placeholder="Submit">
        <input type="reset" name="reset" placeholder="Reset">

    </form>
    <br>

    <?php
        
        if ($types) {
            echo '<table border="1">';
            echo '<tr><th>ID</th><th>Part Type</th><th>Part Compatibility</th><th>Part Category</th>';

            foreach ($types as $type) {
                echo '<tr>';
                echo '<td>' . $type['partTypeID'] . '</td>';
                echo '<td>' . $type['partType'] . '</td>';
                echo '<td>' . $type['partCompatibility'] . '</td>';
                echo '<td>' . $type['partCategory'] . '</td>';
                echo '<td>';

                // Edit Button
                echo '<form action="" method="post" style="display:inline;">';
                echo '<input type="hidden" name="action" value="edit">';
                echo '<input type="hidden" name="partTypeID" value="' . $type['partTypeID'] . '">';
                echo '<input type="hidden" name="partType" value="' . $type['partType'] . '">';
                echo '<input type="hidden" name="partCompatibility" value="' . $type['partCompatibilityID'] . '">';
                echo '<input type="hidden" name="partCategory" value="' . $type['partCategoryID'] . '">';

                echo '<button type="submit">Edit</button>';
                echo '</form>';

                // Delete Button
                echo '<form action="" method="post" style="display:inline;">';
                echo '<input type="hidden" name="action" value="delete">';
                echo '<input type="hidden" name="partTypeID" value="' . $type['partTypeID'] . '">';

                echo '<button type="submit">Delete</button>';
                echo '</form>';

                echo '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No types found';
        }

    ?>

</body>
</html>
