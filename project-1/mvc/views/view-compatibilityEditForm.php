<div class="form">
    <h3>Edit Compatibility</h3>
        <form action="" method="post">
            
            <input type="hidden" name="partCompatibilityID" value="<?php echo htmlspecialchars($id); ?>">

            <input type="text" id="partCompatibility" name="partCompatibility" value="<?php echo htmlspecialchars($compatibilityName); ?>" required>
            
            <div class="buttons">
                <input type="hidden" name="action" value="update">
                <input type="submit" name="submit" value="Update">
                <button type="cancel" name="cancel">Cancel</button>
            </div>
        </form>
</div>
