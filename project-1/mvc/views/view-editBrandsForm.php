
        <form action="" method="post">
            <input type="hidden" name="partBrandID" value="<?php echo htmlspecialchars($id); ?>">
            <input type="hidden" name="action" value="update">
        
            <label for="partBrand">Editing Brand ID: <?php echo $brands['partBrandID']; ?></label>
            <input type="text" id="partBrand" name="partBrand" value="<?php echo htmlspecialchars($brandName); ?>" required>
            <button type="submit">Update</button>
        </form>
