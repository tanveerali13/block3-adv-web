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
        <h3>Insert New Category</h3>
        <form action="" method="POST" class="form-flex">
                <input type="text" name="partCategory" placeholder="Category Name" required>
                <input type="submit" name="submit" placeholder="Submit">
                <input type="reset" name="reset" placeholder="Reset">
        </form>
    </div>
        <?php
            if ($categories) {
                echo '<table class="table table-bordered mt-4">';
                echo '<thead class="thead-dark">';
                echo '<tr><th>ID</th><th>Category</th><th>Action</th></tr>';
                echo '</thead>';
                echo '<tbody>';

                foreach ($categories as $category) {
                    echo '<tr>';
                    echo '<td>' . $category['partCategoryID'] . '</td>';
                    echo '<td>' . $category['partCategory'] . '</td>';
                    echo '<td>';

                    // Edit Button
                    echo '<form action="" method="post" style="display:inline;">';
                    echo '<input type="hidden" name="action" value="edit">';
                    echo '<input type="hidden" name="partCategoryID" value="' . $category['partCategoryID'] . '">';
                    echo '<input type="hidden" name="partCategory" value="' . $category['partCategory'] . '">';
                    echo '<button class="btn btn-primary" type="submit">Edit</button>';
                    echo '</form>';

                    // Delete Button
                    echo '<form action="" method="post" style="display:inline;">';
                    echo '<input type="hidden" name="action" value="delete">';
                    echo '<input type="hidden" name="partCategoryID" value="' . $category['partCategoryID'] . '">';
                    echo '<button class="btn btn-danger" type="submit">Delete</button>';
                    echo '</form>';

                    echo '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo 'No categories found';
            }
        ?>
    

</body>
</html>
