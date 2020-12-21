<?php
$course = $_POST['getcoursenum'];

$query = "SELECT w.courseName AS wcourseName, w.courseNum, w.weight AS wweight, o.weight AS oweight, o.courseCode, o.courseName AS ocourseName, u.name, e.date FROM westernCourse w, equivalent e, outsideCourse o,otherUniversity u WHERE w.courseNum = e.courseNum AND e.universityID = o.universityID AND e.courseCode = o.courseCode AND u.id = o.universityID AND u.id = e.universityID AND w.courseNum='" . $course . "'";

$result=mysqli_query($connection,$query);
if (!$result) {
    die("database query failed.");
}
echo "Following course/s is/are equivalent:";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["wcourseName"] . " " . $row["courseNum"] . " " . $row["wweight"] . " equivalents to " . $row["name"] . " " . $row["ocourseName"] . " " . $row["courseCode"] . " " . $row["oweight"] . " Since " . $row["date"] . "</li>";

}
?>