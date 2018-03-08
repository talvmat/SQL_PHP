<!DOCTYPE html>
<html>
<body>

<p>
    <h1>
        Showing my table.
    </h1>
    <?php
    $link = mysqli_connect("localhost", "root", "root", "Talveladummydata");
     
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     
    $sql = "SELECT * FROM course";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) >0){
            echo "<table>";
                echo "<tr>";
                	//Sorry, so near of the example but I used my ready database
                    echo "<th>CourseName</th>";
                    echo "<th>CourseYear</th>";
                    echo "<th>courseID</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['CourseName'] . "</td>";
                    echo "<td>" . $row['CourseYear'] . "</td>";
                    echo "<td>" . $row['courseID'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }


    mysqli_close($link);

    ?>
</p>
 

    
</body>
</html>


