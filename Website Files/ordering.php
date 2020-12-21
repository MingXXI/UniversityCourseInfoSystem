<?php
  $whichclass = $_POST["ordering"][0];
  $whichOrder = $_POST["ordering"][1];
  $query = "SELECT * FROM westernCourse ORDER BY ". $whichclass . " ". $whichOrder; // ordering query
  $result = mysqli_query($connection,$query);
  if (!$result) {
    echo "<br>" . $query . "<br>";
    die("databases query failed.");
  }
  while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>" . $row["courseNum"] . " " . $row["courseName"] . " " . $row["weight"] . " " . $row["suffix"] . "<br>";
   }
   mysqli_free_result($result);
?>




