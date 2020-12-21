<?php
  $westerncourse = $_POST["newequiv"][0];
  $separator = ",";
  $othercoursequery = explode($separator,$_POST["newequiv"][1]);

  $checkquery = "SELECT * FROM equivalent WHERE courseNum= '" . $westerncourse . "' AND courseCode = '" . $othercoursequery[0] . "' AND universityID = '" . $othercoursequery[1] . "'";
  $checkresult = mysqli_query($connection,$checkquery);
  if (!$checkresult) {
    echo "<br>" . $checkquery . "<br>";
    die("databases checkquery failed.");
  }
  if ($checkresult->num_rows == 0){
    $query = "INSERT INTO equivalent VALUES ('" . $westerncourse . "','" . $othercoursequery[0] . "','" . $othercoursequery[1] . "',CURDATE())";
    $result = mysqli_query($connection,$query);
    if(!$result){
      echo "<br>" . $query . "<br>";
      die("databases query failed.");
    }else{
      echo "<br> Equivalent Successfully Added!" ;
    }
  } else{
    $query = "UPDATE equivalent SET date = CURDATE() WHERE courseNum = '" . $westerncourse . "' AND courseCode = '" . $othercoursequery[0] . "' AND universityID = '" . $othercoursequery[1] . "'";
    $result = mysqli_query($connection,$query);
    if(!$result){
      echo "<br>" . $query . "<br>";
      die("databases query failed.");
    }else{
      echo "<br> Equivalent Successfully Updated!" ;
    }
  }
   mysqli_free_result($checkresult);
?>
