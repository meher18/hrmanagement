<?php

$studentid=$_GET['resumeid'];
  
 $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

                $query1 = "select * from marks where student_id='$studentid' ";
        $exec1 = mysqli_query($connect, $query1) or die(mysqli_error($connect));
        $row= mysqli_fetch_array($exec1);
        if($row['marks'])
        {
            echo "marks of the student is ".$row['marks'];
        }
        else{
            echo "The student has not given the test";
        }


?>