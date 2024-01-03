
<h3>Edit Compatibility</h3>
        <form action="" method="post">
            
            <input type="hidden" name="partCompatibilityID" value="<?php echo htmlspecialchars($id); ?>">

            <label for="partCompatibility">Editing Compatibility ID: <?php echo htmlspecialchars($id); ?></label>
            <input type="text" id="partCompatibility" name="partCompatibility" value="<?php echo htmlspecialchars($compatibilityName); ?>" required>

            <input type="hidden" name="action" value="update">
            <button type="submit">Update</button>
            <button type="cancel">Cancel</button>
        </form>
    <br>
