<?php
$query = "SELECT DISTINCT province FROM otherUniversity";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="';
    echo $row["province"];
    echo '">' . $row["province"] . "<br>";

} mysqli_free_result($result);
?>

