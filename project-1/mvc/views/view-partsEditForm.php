<div class="form">
    <h3>Edit Part</h3>
            <form action="" method="post">
                
                <input type="hidden" name="partID" value="<?php echo htmlspecialchars($id); ?>">

                <input type="text" id="partName" name="partName" class="form-control" value="<?php echo htmlspecialchars($partName); ?>" required>

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

                <input type="text" id="partPrice" name="partPrice" class="form-control" value="<?php echo htmlspecialchars($partPrice); ?>" required>

                
                <input type="text" id="partStock" name="partStock" class="form-control" value="<?php echo htmlspecialchars($partStock); ?>" required>
                

                <div class="buttons">
                    <input type="hidden" name="action" value="update">
                    <input type="submit" name="submit">
                    <button type="cancel" name="cancel">Cancel</button>
                </div>
            </form>
</div>
