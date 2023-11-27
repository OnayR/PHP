<style>
    body {
        text-align: center;
    }

    .red {
        display: inline;
        width: 19.6%;
        margin-bottom: 5px;
        border-style: solid;
    }
</style>

<?php

for ($i = 1; $i <= 9; $i++) {
    if ($i % 2 == 0) {
        echo "<img class='red' src='apen/aap" . $i . ".jpg' style='border-color: red;'>";
    } else {
        echo "<img class='red' src='apen/aap" . $i . ".jpg' style='border-color: green;'>";
    }
}
?>