<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update western course information</title>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<link rel="stylesheet" href="portal.css">              
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'connecttodb.php'; ?>
<h1>Here is your result:</h1>

<ol>
<?php
$coursenumber= $_POST["coursenumber"];

$query1= 'SELECT * FROM westernCourse';
$result=mysqli_query($connection,$query1);
if (!$result) {
    die("database query1 failed.");
}
$row=mysqli_fetch_assoc($result);
$query = 'DELETE FROM westernCourse WHERE courseNum = "' . $coursenumber . '"';
if (!mysqli_query($connection, $query)) {
    die("Error: delete failed" . mysqli_error($connection));
}
echo "Delete the course succussfully!<br>";
echo "Auto-Redirection to Home Page in 3 Second!";
$url = 'http://cs3319.gaul.csd.uwo.ca/vm206/a3ming/course.php';
mysqli_close($connection);

?>
</ol>
<meta http-equiv="refresh" content = "3; url = <?php echo $url; ?>" >
</body>
</html>