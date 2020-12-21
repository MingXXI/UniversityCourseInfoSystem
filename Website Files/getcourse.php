<?php
  $query = "SELECT * FROM westernCourse";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query failed.");
  }
  while ($row = mysqli_fetch_assoc($result)) {
         echo "<option value='".$row["courseNum"] . "'>" . $row["courseNum"] . " " . $row["courseName"] . " " .$row["weight"] . " " .$row["suffix"] . " " ."</option>";
  }
   mysqli_free_result($result);
?>