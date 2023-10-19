<style>
    .odd {
        background-color: #ddd;
    }
</style>

<?php
$sampleArray = array(1, 2, 3, "red", "yellow", "blue");

for ($i = 0; $i < count($sampleArray); $i++) {
    $class = ($i + 1) % 2 ? "odd" : "even";
    echo "<p class='$class'>index $i contains: $sampleArray[$i]</p>";
}

?>