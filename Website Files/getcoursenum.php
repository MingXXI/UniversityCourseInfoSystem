<?php
$query = "SELECT * FROM westernCourse";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option name="coursenumber" value="';
    echo $row["courseNum"];
    echo '">' . $row['courseNum'] . "<br>";

}
mysqli_free_result($result);
?>