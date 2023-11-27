<style>
    body {
        text-align: center;
    }

    p {
        display: inline;
        margin-right: 3px;
    }
</style>


<?php

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<p class='stars'>*</p>";
    }
    echo "<br>";
}
?>