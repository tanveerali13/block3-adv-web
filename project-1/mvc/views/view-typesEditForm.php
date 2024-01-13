<div class="form">
    <h3>Edit Type</h3>
            <form action="" method="post">
                
                <input type="hidden" name="partTypeID" value="<?php echo htmlspecialchars($id); ?>">

                <input type="text" id="partType" name="partType" class="form-control" value="<?php echo htmlspecialchars($partType); ?>" required>

                <select name="partCompatibility" class="form-control" required>
                    <option value="">Select Compatiblity</option>
                    <?php
                        if ($compatibilities) {
                        foreach ($compatibilities as $compatibility) {
                            echo '<option value="' . $compatibility['partCompatibilityID'] . '">' . $compatibility['partCompatibility'] . '</option>';
                            }
                        }
                    ?>
                </select>

                <select name="partCategory" class="form-control" required>
                    <option value="">Select Category</option>
                    <?php
                        if ($categories) {
                        foreach ($categories as $category) {
                            echo '<option value="' . $category['partCategoryID'] . '">' . $category['partCategory'] . '</option>';
                            }
                        }
                    ?>
                </select>

                <div class="buttons">
                    <input type="hidden" name="action" value="update">
                    <input type="submit" name="submit" value="Update">
                    <button type="cancel" name="cancel">Cancel</button>
                </div>
            </form>
</div>
