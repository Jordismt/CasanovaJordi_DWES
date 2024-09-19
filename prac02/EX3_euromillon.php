<?php
// Generate 5 random numbers between 1 and 50
$numbers_50 = [];
while (count($numbers_50) < 5) {
    $num = mt_rand(1, 50);
    if (!in_array($num, $numbers_50)) {
        $numbers_50[] = $num;
    }
}

// Generate 2 random numbers between 1 and 12
$numbers_12 = [];
while (count($numbers_12) < 2) {
    $num = mt_rand(1, 12);
    if (!in_array($num, $numbers_12)) {
        $numbers_12[] = $num;
    }
}

// Sort numbers
sort($numbers_50);
sort($numbers_12);

// Display sorted numbers
echo "Numbers between 1 and 50: " . implode(", ", $numbers_50) . "<br>";
echo "Numbers between 1 and 12: " . implode(", ", $numbers_12) . "<br>";
?>
