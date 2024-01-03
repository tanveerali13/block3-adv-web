<h3>Edit Category</h3>
        <form action="" method="post">
            
            <input type="hidden" name="partCategoryID" value="<?php echo htmlspecialchars($id); ?>">

            <label for="partCategory">Editing Category ID: <?php echo htmlspecialchars($id); ?></label>
            <input type="text" id="partCategory" name="partCategory" value="<?php echo htmlspecialchars($categoryName); ?>" required>

            <input type="hidden" name="action" value="update">
            <button type="submit">Update</button>
            <button type="cancel">Cancel</button>
        </form>
    <br>