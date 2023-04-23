<?php
for ($x = 1; $x <= 5; $x++) {
    for ($y = 0; $y <= 5; $y++) {
        if ($y < $x) {
            echo "*";
        }
    }
    echo "</br>";
}
for ($i = 5; $i >= 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "</br>";
}
?>
