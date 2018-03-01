<!DOCTYPE html>
<html>
<body>


<p>
    <h1>
        Update current record.
    </h1>
    <h3>
        Set parameters to update:
    </h3>
    <h5>
         http://localhost:8888/addrecords.php/?CourseName=NEW_COURSNAME&CourseYear=NEW_COURSEID&courseID=NEW_COURSEID&UpdateID=WHICH_ID
    </h5>
    <?php
        $link = mysqli_connect("localhost", "root", "root", "Talveladummydata");
 

        $CourseName = mysqli_real_escape_string($link, $_GET['CourseName']);
        $CourseYear = mysqli_real_escape_string($link, $_GET['CourseYear']);
        $CourseID = mysqli_real_escape_string($link, $_GET['courseID']);
        $UpdateID = mysqli_real_escape_string($link, $_GET['UpdateID']);

        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // attempt insert query execution
      $sql = "UPDATE course SET CourseName='$CourseName', CourseYear= '$CourseYear', courseID=  '$CourseID' WHERE courseID= '$UpdateID'";
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

