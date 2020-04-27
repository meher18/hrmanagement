<?php




$studentid=$_GET['resumeid'];
  
 $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

                $query1 = "update marks set selected='selected' where student_id='$studentid' ";
        $exec1 = mysqli_query($connect, $query1) or die(mysqli_error($connect));
        if($exec1)
        {
            echo "selected";
        }
        else{
            echo "unable to select";
        }


?>