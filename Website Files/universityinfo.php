<?php
    $id = $_POST["getuniversity"]; //get selected museum value from the form
    $coursequery = 'SELECT * FROM otherUniversity,outsideCourse WHERE outsideCourse.universityID=otherUniversity.id AND otherUniversity.id='. $id;
    $universityquery = 'SELECT * FROM otherUniversity Where id=' . $id;
    $universityresult = mysqli_query($connection, $universityquery);
    $courseresult = mysqli_query($connection, $coursequery);
    if (!$result) {
     die("databases query on art pieces failed. ");
    }
    $row = mysqli_fetch_assoc($universityresult);
    echo "Univeristy ID: " . $row["id"] . "<br>";
    echo "Univeristy Name: " . $row["name"] . "<br>";
    echo "Univeristy City: " . $row["city"] . "<br>";
    echo "Univeristy Province: " . $row["province"] . "<br>";
    echo "Univeristy Nickname: " . $row["nickName"] . "<br>";

    echo "<ul>";
    while ($row2 = mysqli_fetch_assoc($courseresult)) {
        echo "<li>" . $row2["courseCode"] . " " . $row2["courseName"] . "</li>";
    }


    echo "</ul>";   //end the bulleted list
    mysqli_free_result($universityresult);
    mysqli_free_result($courseresult);

?>
