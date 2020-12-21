<?php
$course = $_POST['getcourse'];
$query = "SELECT DISTINCT o.courseCode, o.courseName, u.name FROM westernCourse w, equivalent e, outsideCourse o,otherUniversity u WHERE w.courseNum = e.courseNum AND e.universityID = o.universityID AND e.courseCode = o.courseCode AND u.id = o.universityID AND u.id = e.universityID AND w.courseNum='" . $course . "'";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "WARNING: THE COURSE YOU SELECTED IS EQUIVALENT TO FOLLOWING COURSES";
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row['courseCode'] . " " . $row["courseName"] . " By " . $row["name"]."</li>";

}
mysqli_free_result($result);
echo "</ol>";
echo "<html>";
echo "<body>";
echo "<form action='deletecourse.php' method='post'>"; //Delete action 
echo "Click the button to Confirm DELETE: <input type='submit' name='coursenumber' value='" . $course . "'>";
echo "</form>";
echo "</body>";
echo "</html>";
?>
