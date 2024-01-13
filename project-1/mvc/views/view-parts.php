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
        <h3>Insert New Part</h3>
        <form action="" method="POST">
            <input type="text" name="partName" class="form-control" placeholder="Part Name">

            <select name="partType" class="form-control" required>
                    <option value="">Select Type</option>
                    <?php
                        if ($types) {
                        foreach ($types as $type) {
                            echo '<option value="' . $type['partTypeID'] . '">' . $type['partType'] . '</option>';
                            }
                        }
                    ?>
                </select>

                <select name="partBrand" class="form-control" required>
                    <option value="">Select Brand</option>
                    <?php
                        if ($brands) {
                        foreach ($brands as $brand) {
                            echo '<option value="' . $brand['partBrandID'] . '">' . $brand['partBrand'] . '</option>';
                            }
                        }
                    ?>
                </select>

            <input type="text" name="partPrice" class="form-control" placeholder="Price">
            <input type="text" name="partStock" class="form-control" placeholder="Stock">

            <div class="buttons">
                <input type="submit" name="submit" placeholder="Submit">
                <input type="reset" name="reset" placeholder="Reset">
            </div>

        </form>
    </div>
    <?php
        
        if ($parts) {
            echo '<table class="table table-bordered mt-4">';
            echo '<thead class="thead-dark">';
            echo '<tr><th>ID</th><th>Part Name</th><th>Part Type</th><th>Part Brand</th><th>Part Price</th><th>Part Stock</th><th>Action</th></tr>';
            echo '</thead>';
            echo '<tbody>';

            foreach ($parts as $part) {
                echo '<tr>';
                echo '<td>' . $part['partID'] . '</td>';
                echo '<td>' . $part['partName'] . '</td>';
                echo '<td>' . $part['partType'] . '</td>';
                echo '<td>' . $part['partBrand'] . '</td>';
                echo '<td>' . $part['partPrice'] . '</td>';
                echo '<td>' . $part['partStock'] . '</td>';
                echo '<td>';

                // Edit Button
                echo '<form action="" method="post" style="display:inline;">';
                echo '<input type="hidden" name="action" value="edit">';
                echo '<input type="hidden" name="partID" value="' . $part['partID'] . '">';
                echo '<input type="hidden" name="partName" value="' . $part['partName'] . '">';
                echo '<input type="hidden" name="partType" value="' . $part['partType'] . '">';
                echo '<input type="hidden" name="partBrand" value="' . $part['partBrand'] . '">';
                echo '<input type="hidden" name="partPrice" value="' . $part['partPrice'] . '">';
                echo '<input type="hidden" name="partStock" value="' . $part['partStock'] . '">';
                echo '<button class="btn btn-primary" type="submit">Edit</button>';
                echo '</form>';

                // Delete Button
                echo '<form action="" method="post" style="display:inline;">';
                echo '<input type="hidden" name="action" value="delete">';
                echo '<input type="hidden" name="partID" value="' . $part['partID'] . '">';
                echo '<button class="btn btn-danger" type="submit">Delete</button>';
                echo '</form>';

                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo 'No parts found';
        }

    ?>

</body>
</html>
