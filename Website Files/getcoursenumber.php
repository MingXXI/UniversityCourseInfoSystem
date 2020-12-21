<?php
$query = "SELECT * FROM westernCourse";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="radio" name="coursenumber" value="';
    echo $row["courseNum"];
    echo '">' . $row['courseNum'] . " " . $row["courseName"] . " " . $row["weight"] . " " . $row["suffix"] . "<br>";

}
mysqli_free_result($result);
?>