<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <div class="form">
        <h3>Insert New Type</h3>
        <form action="" method="POST">
                        
                    <input type="text" name="partType" class="form-control" placeholder="Part Type" required>

                    <select name="partCompatibility" class="form-control" required>
                        <option value="">Compatibility</option>
                        <?php
                            if ($compatibilities) {
                                foreach ($compatibilities as $compatibility) {
                                    echo '<option value="' . $compatibility['partCompatibilityID'] . '">' . $compatibility['partCompatibility'] . '</option>';
                                }
                            }
                        ?>
                    </select>

                    <select name="partCategory" class="form-control" required>
                        <option value="">Category</option>
                        <?php
                            if ($categories) {
                                foreach ($categories as $category) {
                                    echo '<option value="' . $category['partCategoryID'] . '">' . $category['partCategory'] . '</option>';
                                }
                            }
                        ?>
                    </select>

                <div class="buttons">
                    <input type="submit" name="submit" placeholder="Submit">
                    <input type="reset" name="reset" placeholder="Reset">
                </div>

        </form>
    </div>

        <?php
            if ($types) {
                echo '<table class="table table-bordered mt-4">';
                echo '<thead class="thead-dark">';
                echo '<tr><th>ID</th><th>Part Type</th><th>Part Compatibility</th><th>Part Category</th><th>Action</th></tr>';
                echo '</thead>';
                echo '<tbody>';

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
                    echo '<button class="btn btn-primary" type="submit">Edit</button>';
                    echo '</form>';

                    // Delete Button
                    echo '<form action="" method="post" style="display:inline;">';
                    echo '<input type="hidden" name="action" value="delete">';
                    echo '<input type="hidden" name="partTypeID" value="' . $type['partTypeID'] . '">';
                    echo '<button class="btn btn-danger" type="submit">Delete</button>';
                    echo '</form>';

                    echo '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<div class="alert alert-info">No types found</div>';
            }
        ?>
   

</body>
</html>
