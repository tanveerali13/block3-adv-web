<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Insert new category</h3>
    <form action="" method="POST">
        <input type="text" name="partCategory" placeholder="Category Name">
        <input type="submit" name="submit" placeholder="Submit">
        <input type="reset" name="reset" placeholder="Reset">

    </form>
    <br>

    <?php
        
        if ($categories) {
            echo '<table border="1">';
            echo '<tr><th>ID</th><th>Category</th><th>Action</th></tr>';

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
                echo '<button type="submit">Edit</button>';
                echo '</form>';

                // Delete Button
                echo '<form action="" method="post" style="display:inline;">';
                echo '<input type="hidden" name="action" value="delete">';
                echo '<input type="hidden" name="partCategoryID" value="' . $category['partCategoryID'] . '">';
                echo '<button type="submit">Delete</button>';
                echo '</form>';

                echo '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No categories found';
        }

    ?>

</body>
</html>
