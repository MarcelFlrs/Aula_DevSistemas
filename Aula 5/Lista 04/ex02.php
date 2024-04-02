<?php

$vetor = array("10.0", "20.0", "30.0", "40.0", "50.0", "60.0", "70.0", "80.0", "90.0", "100.0");

for ($i = 0; $i < count($vetor); $i++) {
    echo " " . $vetor[$i];
}
echo "<br>";
echo "<br>";

for ($i = count($vetor) - 1; $i >= 0; $i--) {
    echo " " . $vetor[$i];
}