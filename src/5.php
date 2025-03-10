 <?php
// Create an array with some colors
$colors = array("#FF9E1B", "#4363D8", "#A54C24", "#76D7F9", "#F96A5C");
// Shuffle the array to get a randomized order
shuffle($colors);
// Print each color in a div with some text
foreach ($colors as $color) {
    echo "<div style='background-color: " . $color . ";'>" . $color . "</div>";
}
?>