<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $shirt_name = $_GET["shirt_name"];
    $shirt_color = $_GET["shirt_color"];
    $shirt_size = $_GET["shirt_size"];

  if (empty($shirt_name) || empty($shirt_color) || empty($shirt_size)) {
    echo "<p>You did not fill in all the fields.</p>";
  }
  else {
    $available_colors = array("white", "blue", "black", "red", "yellow");
    if (in_array($shirt_color, $available_colors)) {
      echo "<p>Your shirt updated successfully!</p>";
    }
    else {
      echo "<p>Selected color is not available.</p>";
    }
  }
}
?>