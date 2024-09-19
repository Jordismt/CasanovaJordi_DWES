<?php
// Create the meals array
$meals = array("Pizza", "Burger", "Pasta", "Salad");

// Show array as a string with elements separated by commas
echo "Meals: " . implode(", ", $meals) . "<br>";

// Show the array ordered alphabetically, ascending
$meals_asc = $meals;
sort($meals_asc);
echo "Meals in ascending order: " . implode(", ", $meals_asc) . "<br>";

// Show the array ordered alphabetically, descending
$meals_desc = $meals;
rsort($meals_desc);
echo "Meals in descending order: " . implode(", ", $meals_desc) . "<br>";

// Show the position of your favorite meal 
$fav_meal = "Pizza";
$fav_index = array_search($fav_meal, $meals);
echo "Position of $fav_meal in the array: " . $fav_index . "<br>";
?>
