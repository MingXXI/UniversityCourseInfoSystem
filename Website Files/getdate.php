<?php
$query = "SELECT DISTINCT date FROM equivalent ORDER BY date";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option name="decidedate" value="';
    echo $row["date"];
    echo '">' . $row["date"] . "<br>";

} mysqli_free_result($result);
?>