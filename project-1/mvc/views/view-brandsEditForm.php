
    <h3>Edit Brand</h3>
        <form action="" method="post">
            
            <input type="hidden" name="partBrandID" value="<?php echo htmlspecialchars($id); ?>">

            <label for="partBrand">Editing Brand ID: <?php echo htmlspecialchars($id); ?></label>
            <input type="text" id="partBrand" name="partBrand" value="<?php echo htmlspecialchars($brandName); ?>" required>

            <input type="hidden" name="action" value="update">
            <button type="submit">Update</button>
            <button type="cancel">Cancel</button>
        </form>
    <br>