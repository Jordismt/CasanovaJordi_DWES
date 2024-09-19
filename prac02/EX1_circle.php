<?php
// Define a constant for PI
define('PI', 3.141592653589793);

// Get the radius from the query string
$radius = isset($_GET['radius']) ? (float)$_GET['radius'] : 0;

// Calculate diameter, circumference, and area
$diameter = 2 * $radius;
$circumference = 2 * PI * $radius;
$area = PI * $radius * $radius;

// Display the results
echo "Radius: $radius<br>";
echo "Diameter: $diameter<br>";
echo "Circumference: $circumference<br>";
echo "Area: $area<br>";

// Optional: Using M_PI constant
echo "<br>Using M_PI:<br>";
$diameter_mpi = 2 * $radius;
$circumference_mpi = 2 * M_PI * $radius;
$area_mpi = M_PI * $radius * $radius;

echo "Diameter: $diameter_mpi<br>";
echo "Circumference: $circumference_mpi<br>";
echo "Area: $area_mpi<br>";
?>
