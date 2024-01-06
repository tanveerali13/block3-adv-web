
<h3>Edit Part</h3>
        <form action="" method="post">
            
            <input type="hidden" name="partID" value="<?php echo htmlspecialchars($id); ?>">

            <label for="partName">Editing Part ID: <?php echo htmlspecialchars($id); ?></label>
            <input type="text" id="partName" name="partName" value="<?php echo htmlspecialchars($partName); ?>" required>

            <select name="partType" required>
                <option value="">Select Type</option>
                <?php
                    if ($types) {
                    foreach ($types as $type) {
                        echo '<option value="' . $type['partTypeID'] . '">' . $type['partType'] . '</option>';
                        }
                    }
                ?>
            </select>

            <select name="partBrand" required>
                <option value="">Select Brand</option>
                <?php
                    if ($brands) {
                    foreach ($brands as $brand) {
                        echo '<option value="' . $brand['partBrandID'] . '">' . $brand['partBrand'] . '</option>';
                        }
                    }
                ?>
            </select>

            <input type="text" id="partPrice" name="partPrice" value="<?php echo htmlspecialchars($partPrice); ?>" required>

            
            <input type="text" id="partStock" name="partStock" value="<?php echo htmlspecialchars($partStock); ?>" required>
            

            <input type="hidden" name="action" value="update">
            <button type="submit">Update</button>
            <button type="cancel">Cancel</button>
        </form>
    <br>
