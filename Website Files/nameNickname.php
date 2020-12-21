<?php
$query = "SELECT name, nickName FROM otherUniversity WHERE id NOT IN (SELECT universityID FROM outsideCourse)";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row['name'] . " -- " . $row["nickName"] . "</li>";

} mysqli_free_result($result);
echo "</ol>";
?>