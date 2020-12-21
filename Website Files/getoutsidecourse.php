<?php
  $query = "SELECT * FROM outsideCourse,otherUniversity WHERE otherUniversity.id = outsideCourse.universityID";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query failed.");
  }
  while ($row = mysqli_fetch_assoc($result)) {
    $valuearray = array($row["courseCode"],$row["universityID"]);
    $separator = ",";
    $string = implode($separator,$valuearray);
    echo "<option value= $string >" . $row["courseCode"] . " " . $row["courseName"] . " By " . $row["name"] . "<br>";
  }
   mysqli_free_result($result);
?>