<!DOCTYPE html>
<html>
<body>


<p>
    <h1>
        Givin input to create new records
    </h1>
    <h2>
        To add new record:
        <br>
         http://localhost:8888/addrecords.php/?CourseName=**COURSNAME**&CourseYear=**COURSEID**&courseID=**COURSEID**
    </h2>
    <?php
        $link = mysqli_connect("localhost", "root", "root", "Talveladummydata");
 

        $CourseName = mysqli_real_escape_string($link, $_GET['CourseName']);
        $CourseYear = mysqli_real_escape_string($link, $_GET['CourseYear']);
        $CourseID = mysqli_real_escape_string($link, $_GET['courseID']);
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // attempt insert query execution
      $sql = "INSERT INTO course (CourseName, CourseYear, courseID) VALUES ('$CourseName', '$CourseYear', '$CourseID')";
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        // Close connection
        mysqli_close($link);
     ?>

</p> 

</body>
</html>
