<div class="form">
    <h3>Edit Category</h3>
        <form action="" method="post">
            
            <input type="hidden" name="partCategoryID" value="<?php echo htmlspecialchars($id); ?>">

            <input type="text" id="partCategory" name="partCategory" value="<?php echo htmlspecialchars($categoryName); ?>" required>

            <div class="buttons">
                <input type="hidden" name="action" value="update">
                <input type="submit" name="submit" value="Update">
                <button type="cancel" name="cancel">Cancel</button>
            </div>
        </form>
</div>