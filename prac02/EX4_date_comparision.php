<?php
// Read day, month, and year from query string
$day = isset($_GET['day']) ? (int)$_GET['day'] : 1;
$month = isset($_GET['month']) ? (int)$_GET['month'] : 1;
$year = isset($_GET['year']) ? (int)$_GET['year'] : 2024;

// Create DateTime objects
$input_date = new DateTime("$year-$month-$day");
$current_date = new DateTime();

// Format dates
$formatted_input_date = $input_date->format('l, F jS, Y');
$formatted_current_date = $current_date->format('l, F jS, Y');

// Calculate difference in days
$interval = $current_date->diff($input_date);
$days_difference = $interval->days;

// Display dates and difference
echo "Input Date: $formatted_input_date<br>";
echo "Current Date: $formatted_current_date<br>";
echo "Difference in days: " . $interval->days . "<br>";

// Display Unix timestamps
echo "Input Date Unix Timestamp: " . $input_date->getTimestamp() . "<br>";
echo "Current Date Unix Timestamp: " . $current_date->getTimestamp() . "<br>";
?>
