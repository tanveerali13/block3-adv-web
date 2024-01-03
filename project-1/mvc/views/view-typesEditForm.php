
<h3>Edit Type</h3>
        <form action="" method="post">
            
            <input type="hidden" name="partTypeID" value="<?php echo htmlspecialchars($id); ?>">

            <label for="partType">Editing Type ID: <?php echo htmlspecialchars($id); ?></label>
            <input type="text" id="partType" name="partType" value="<?php echo htmlspecialchars($partType); ?>" required>

            <select name="partCompatibility" required>
                <option value="">Select Compatiblity</option>
                <?php
                    if ($compatibilities) {
                    foreach ($compatibilities as $compatibility) {
                        echo '<option value="' . $compatibility['partCompatibilityID'] . '">' . $compatibility['partCompatibility'] . '</option>';
                        }
                    }
                ?>
            </select>

            <select name="partCategory" required>
                <option value="">Select Category</option>
                <?php
                    if ($categories) {
                    foreach ($categories as $category) {
                        echo '<option value="' . $category['partCategoryID'] . '">' . $category['partCategory'] . '</option>';
                        }
                    }
                ?>
            </select>

            <input type="hidden" name="action" value="update">
            <button type="submit">Update</button>
            <button type="cancel">Cancel</button>
        </form>
    <br>
