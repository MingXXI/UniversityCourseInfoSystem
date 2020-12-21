<?php
$query = "SELECT * FROM otherUniversity";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row["id"] . "'>" . $row['name'] . "</option>";

}
mysqli_free_result($result);
?>