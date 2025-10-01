<?php
$numbers = [];
for ($count = 5; $count <= 15; $count++) {
    $numbers[] = $count;
}

echo implode(" - ", $numbers);
?>
