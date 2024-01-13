<div class="form">
    <h3>Edit Brand</h3>
        <form id= "edit-form" action="" method="post">
            
            <input type="hidden" name="partBrandID" value="<?php echo htmlspecialchars($id); ?>">
            
            <input type="text" id="partBrand" name="partBrand" value="<?php echo htmlspecialchars($brandName); ?>" required>
            
            <input type="hidden" name="action" value="update">
            <input type="submit" name="submit">
            <button type="cancel" name="cancel">Cancel</button>
        </form>
</div>