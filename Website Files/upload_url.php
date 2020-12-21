   
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add University Image</title>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<link rel="stylesheet" href="portal.css">              
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'connecttodb.php'; ?>
<h1>Here are your courses:</h1>
    
<ol>
	<?php 
		$information= $_POST["url"];
		$name = $_POST["name"];
		$query = "UPDATE otherUniversity SET uniimage = '" . $information . "' WHERE name='".$name."'"; 
		if (!mysqli_query($connection, $query)) {
		    die("Error: delete failed" . mysqli_error($connection)); 
		} 
		echo "Image Added Successfully!<br>";
		echo "Auto-Redirection to Home Page in 3 Second!";
		$url = 'http://cs3319.gaul.csd.uwo.ca/vm206/a3ming/course.php';
		mysqli_close($connection); 
	?> 
</ol> 
<meta http-equiv="refresh" content = "3; url = <?php echo $url; ?>" >
</body> 
</html>
