<?php
$provincecode = $_POST["getprovince"];

$query1= 'SELECT * FROM otherUniversity WHERE province = "' . $provincecode . '"';
$result=mysqli_query($connection,$query1);
if (!$result) {
    die("database query1 failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row['name'] . " -- " . $row["nickName"] . "</li>";

}
?>