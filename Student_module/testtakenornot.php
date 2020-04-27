<?php

$studentid=$_GET['resumeid'];
  
 $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

                $query1 = "select * from marks where student_id='$studentid' ";
        $exec1 = mysqli_query($connect, $query1) or die(mysqli_error($connect));
        $row= mysqli_fetch_array($exec1);
        if($row['marks'])
        {
            echo "You have taken test and secured marks ".$row['marks'];
        }
        else{
            echo "You have not given the test , give the test and apply with this resume";
            
        }


?>