<?php

$studentid=$_GET['resumeid'];
  
 $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

                $query1 = " select * from marks where student_id='$studentid'";
        $exec1 = mysqli_query($connect, $query1) or die(mysqli_error($connect));
        if($exec1)
        { 
            $row=mysqli_fetch_array($exec1);

           $message="hello you have been selected for the job ". $row['jobid'];
           
           $resumequery="select * from resumes where id=$studentid";
           $exec2 = mysqli_query($connect, $resumequery) or die(mysqli_error($connect));
           $row2=mysqli_fetch_array($exec2);
          
            echo "mail will be sent to this email :".$row2['email'];
           
           

         //   $mail = mail("mehersairamt@gmail.com","hello",$message );
//            if($mail)
//            {
//                
//                echo "email sent for ".$row['student_id']."who applied for the job ".$row['jobid'];
//            }
//            else{
//               echo "error";
//            }
            
        }
        else{
            echo "unable to unselect";
        }


?>