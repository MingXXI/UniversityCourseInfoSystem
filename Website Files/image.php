<?php
$university = $_POST['university'];

$query = "SELECT * FROM otherUniversity WHERE id = " . $university ;
$result=mysqli_query($connection,$query);
if (!$result) {
    die("database query failed.");
}
$row = mysqli_fetch_assoc($result);
if ($row['uniimage'] == ""){

        echo "There is no image saved, please upload an image:";
        echo "<html>";
        echo "<body>";
        echo "<form action='upload_url.php' method='post'>";
        echo "<input type='radio'name='name' value='".$row['name']."' checked>" . $row["name"];
        echo "<input type='text' name='url'>";
        echo "<input type='submit' name='imageurl' value='Submit'>";
        echo "</form>";
        echo "</body>";
        echo "</html>";
} else{
       	echo '<img src="' . $row["uniimage"] . '" height="200" width="200">';
}
?>