<?php
$decidedate= $_POST["getdate"];
$query= 'SELECT w.courseName AS wcoursename, w.courseNum, w.weight AS "WesternWeight", u.name, o.courseName as ocoursename, o.courseCode, o.weight AS "OtherWeight", e.date FROM westernCourse w, equivalent e, otherUniversity u, outsideCourse o WHERE e.universityID = o.universityID AND e.courseCode = o.courseCode AND e.universityID = u.id AND w.courseNum = e.courseNum AND e.date <= "' . $decidedate . '"';
$result=mysqli_query($connection,$query);
if (!$result) {
    die("database query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["wcoursename"] . " " . $row["courseNum"] . " " . $row["WesternWeight"] . " equivalents to " . $row["name"] . " " . $row["ocoursename"] . " " . $row["courseCode"] . " " . $row["OtherWeight"] . " By " . $row["date"] . "</li>";

}
mysqli_free_result($result);
?>