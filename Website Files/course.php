<!DOCTYPE html>
<html>
<head>
      	<title>Western Course Protal</title>
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link rel="stylesheet" href="portal.css">              
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>
<body>

<?php
 include "connecttodb.php";
?>

<h1>Course Protal</h1>

<form action="course.php" method="post">
<h2> 1. List all the Western Course Data </h2>
Ordering by:
<select name="ordering[]" id="orderingClassID"> 
	<!-- drop down menu to select order by class -->
        <option value="1">Select Here</option>
        <option value="courseNum">By Course Number </option>
        <option value="courseName">By Course Name</option>
</select>
<br> In
<select name="ordering[]" id="orderingID">
	<!-- drop down menu to select order -->
        <option value="1">Select Here</option>
        <option value="ASC">in Ascending Order</option>
        <option value="DESC">in Descending Order</option>
</select> Order
<br>
<input type="submit" name="submit" value="go">
</form>

<?php
     	if (isset($_POST['submit'])){
                include "connecttodb.php";
                include "ordering.php"; // to get retrived result of the query.
        }

?>
<hr>

<p>
    <h2> 2. Modify course information:</h2>
    <form action="updatecourse.php" method="post">
    Select the course you want to change: <br>
    <?php
	include 'getcoursenumber.php'; // get western course list from database
    ?>

    New course name: <input type="text" name="coursename"><br>
    New course weight: <br>
    <input type="radio" name="weight" value="1.0">Full course: 1.0<br>
    <input type="radio" name="weight" value="0.5">Half course: 0.5<br>

    New course suffix: <br>
    <input type="radio" name="suffix" value='A/B'>A/B<br>
    <input type="radio" name="suffix" value='F/G'>F/G<br>
    <input type="radio" name="suffix" value='E'>E<br>
    <input type="radio" name="suffix" value='Y'>Y<br>
    <input type="radio" name="suffix" value='Z'>Z<br>
    <input type="radio" name="suffix" value=''><br>

    <input type="submit" value="Modify course information">
    </form>
	<hr>

<p>
   	<h2> 3. Delete a Western Course
        <form action="course.php" method="post">
        <select name="getcourse" id="getcourse">
                <option value="1">Select Here</option>
                <?php
                include "getcourse.php"; // get existing western course from database
                ?>
        </select>
        </form>

        <?php
             	if (isset($_POST['getcourse'])){
                        include "connecttodb.php";
                        include "getcoursenumEquiv.php"; // get existing equivalent with selected course to double check
                }
        ?>
	<hr>
<p>
    <h2>4. Add new western course:</h2>
    <form action="addcourse.php" method="post"> 
    	<!-- redirection to a notification page -->

    New course number (four digits only): <input type="text" name="coursenumber"><br>
    New course name: <input type="text" name="coursename"><br>
    New course weight: <br>
    <input type="radio" name="weight" value="1.0">Full course: 1.0<br>
    <input type="radio" name="weight" value="0.5">Half course: 0.5<br>

    New course suffix: <br>
    <input type="radio" name="suffix" value='A/B'>A/B<br>
    <input type="radio" name="suffix" value='F/G'>F/G<br>
    <input type="radio" name="suffix" value='E'>E<br>
    <input type="radio" name="suffix" value='Y'>Y<br>
    <input type="radio" name="suffix" value='Z'>Z<br>
    <input type="radio" name="suffix" value=''><br>

    <input type="submit" value="Add course information">
    </form>
    <hr>

<p>
   	<h2> 5. Select University

        <form action="course.php" method="post">
        <select name="getuniversity" id="getuniversity">
                <option value="1">Select Here</option>
                <?php
                include "getuniversity.php"; // get retrived university from query. 
                ?>
        </select>
        </form>
        <?php
             	if (isset($_POST['getuniversity'])){
                        include "connecttodb.php";
                        include "universityinfo.php"; // get information of the selected university
                }
        ?>
	<hr>

<p>
    <h2> 6. Select universities from a province code:</h2>
    <form action="course.php" method="post">
    <select name="getprovince" id="getprovince">
    Select a province code: <br>
    <option value="1">Select Here</option>
                <?php
                     	include "getprovince.php"; // get province list from database
                ?>
        </select>
    </form>
	<?php
             	if (isset($_POST['getprovince'])){
                        include "connecttodb.php";
                        include "provinceinfo.php"; // get information of the selected province
                }
        ?>
	<hr>

<p>
    <h2>7. Select western course with its equivalent information:</h2>
    <form action="course.php" method="post">
        <select name="getcoursenum" id="getcoursenum">
    Select a Western Course: <br>
    <option value="1">Select Here</option>
                <?php
                     	include "getcoursenum.php"; // get existing course number 
                ?>
        </select>
    </form>
	<?php
             	if (isset($_POST['getcoursenum'])){
                        include "connecttodb.php";
                        include "getequivalentinfo.php"; // get equivalent information of the selected course
                }
        ?>
    <hr>

<p>
    <h2> 8. Show all equivalencies before Date:</h2>
        <form action="course.php" method="post">
        <select name="getdate" id="getdate">
    Select a Date: <br>
    <option value="1">Select Here</option>
                <?php
                     	include "getdate.php"; // get existing date of equivalent from database
                ?>
        </select>
    </form>
	<?php
             	if (isset($_POST['getdate'])){
                        include "connecttodb.php";
                        include "getdateinfo.php"; // get the information of course that are equivalent before selected date
                }
        ?>
    <hr>

<h2>9. New Equivalent </h2>

<form action="course.php" method="post">
Western Courses:
<select name="newequiv[]" id="newequiv">
        <option value="1">Select Here</option>
        <?php
             	include "getcoursenum.php" // get existing course number from database
        ?>
</select>
<br> Outside Courses:
<select name="newequiv[]" id="newequiv">
        <option value="1">Select Here</option>
        <?php
             	include "getoutsidecourse.php" //get existing outside course number from database
        ?>
</select>
<br>
<input type="submit" name="newequivsubmit" value="Add">
</form>

<?php
     	if (isset($_POST['newequivsubmit'])){
                include "connecttodb.php";
                include "newequiv.php"; //make new equivalence or update the equivalence date
        }

?>
<hr>
<p>

    <h2> 10. List univeristy with no associated courses:</h2>

    Univerisity name and nicknames with no courses in our system: <br>
    <?php 
    	include 'nameNickname.php'; // get university name and nickname from database
    ?> <br> 
<hr>

<p>
    <h2> 11. University mascot:</h2>
    <form action="course.php" method="post">
        <select name="university" id="university">
    <option value="1">Select Here</option>
                <?php
                     	include "university.php"; // get list of university from database
                ?>
        </select>
    </form>
	<?php
             	if (isset($_POST['university'])){
                        include "connecttodb.php";
                        include "image.php"; // get the image from existing url if exist or ask for an url of image to update
                }
        ?>
<hr>


<?php mysqli_close($connection); ?>
</body>
<script src = "course.js"></script> 
<!-- javascript to autorefresh when make selection-->
</html>
















