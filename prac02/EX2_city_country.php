<?php
// Get city and country from query string
$city = isset($_GET['city']) ? $_GET['city'] : '';
$country = isset($_GET['country']) ? $_GET['country'] : '';

// Store in associative array
$location = array(
    "city" => $city,
    "country" => $country
);

// Show the read values
echo "City: " . $location['city'] . "<br>";
echo "Country: " . $location['country'] . "<br>";

// Show the length of each value
echo "Length of City: " . strlen($location['city']) . "<br>";
echo "Length of Country: " . strlen($location['country']) . "<br>";

// Show values in uppercase and lowercase
echo "City in uppercase: " . strtoupper($location['city']) . "<br>";
echo "City in lowercase: " . strtolower($location['city']) . "<br>";
echo "Country in uppercase: " . strtoupper($location['country']) . "<br>";
echo "Country in lowercase: " . strtolower($location['country']) . "<br>";

// Show the number of times 'a' appears
$a_city = substr_count(strtolower($location['city']), 'a');
$a_country = substr_count(strtolower($location['country']), 'a');

echo "Number of 'a' in City: $a_city<br>";
echo "Number of 'a' in Country: $a_country<br>";

// Replace 'o' with '0'
$city_replace = str_ireplace('o', '0', $location['city']);
$country_replace = str_ireplace('o', '0', $location['country']);

echo "City with 'o' replaced by 0: $city_replace<br>";
echo "Country with 'o' replaced by 0: $country_replace<br>";
?>
