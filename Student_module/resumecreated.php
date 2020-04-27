<!doctype html>
<html>
    
    <?php  
    
     session_start();
    
    $jobid = $_SESSION['jobapplyid'];
    ?> <?php
  $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));
    if (isset($_POST['on'])) {

     


        $studentname = mysqli_real_escape_string($connect, $_POST['studentname']);
        $gender = mysqli_real_escape_string($connect, $_POST['gender']);
        $dob = mysqli_real_escape_string($connect, $_POST['dob']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $phone = mysqli_real_escape_string($connect, $_POST['phone']);
        $address = mysqli_real_escape_string($connect, $_POST['address']);
        $college = mysqli_real_escape_string($connect, $_POST['college']);
        $qualifications = mysqli_real_escape_string($connect, $_POST['qualifications']);
        $skills = mysqli_real_escape_string($connect, $_POST['skills']);
        $hobbies = mysqli_real_escape_string($connect, $_POST['hobbies']);
        $jobposition = mysqli_real_escape_string($connect, $_POST['jobposition']);


        $query = "insert into resumes(studentname,gender,dob,email,phone,address,college,qualifications,skills,hobby,jobposition,jobid) values( '$studentname','$gender','$dob','$email','$phone','$address','$college','$qualifications','$skills','$hobbies','$jobposition','$jobid') ";
        $exec = mysqli_query($connect, $query) or die(mysqli_error($connect));
          $id = mysqli_insert_id($connect);
          
          $jobid=$_SESSION['jobapplyid'];
          $_SESSION['studentresumeid']=$id;
        if ($exec) {
            echo "resume created by ". mysqli_insert_id($connect)."for ".$jobid;
          
        } else {
            echo "sorry there was a problem unable to insert";
        }

//        $id = mysqli_insert_id($connect);
//        $filecreate = fopen("resumes/resume$studentname$id.txt", "x+");
//        $array = array("STUDENT NAME = $studentname", "$ GENDER = gender", " DATE OF BIRTH $dob", "$ EMAIL = $email", " PHONE NO: $phone", " ADDRESS: $address", "COLLEGE NAME = $college", "QUALIFICATIONS = $qualifications", " SKILLS = *$skills*", "HOBBIES ! $hobbies !", " EXPECTED JOB : $jobposition");
//
//        foreach ($array as $a) {
//            fwrite($filecreate, "----------------------------------------------------------------------------------------------------------------------------------------------------------------");
//
//            fwrite($filecreate, "\n\n\n\n");
//
//            fwrite($filecreate, "\t\t\t\t\t\t\t" . $a . "\n");
//            fwrite($filecreate, "\n\n\n\n\n");
//
//            fwrite($filecreate, "----------------------------------------------------------------------------------------------------------------------------------------------------------------");
//            fwrite($filecreate, "\n\n\n\n");
//        };
//        fclose($filecreate);
//    }
   
    }
    ?>
    
    <head>
        <title>
            Resume created page
        </title>
        <link href="resumecreatescss.css" rel="stylesheet">
    </head>
    <body>
        <form action="createtest.php" method="POST">
        <div class="container">
            <h1>Your Resume is Created</h1>
            <p>you are ready to apply for the job once you take the test...</p>
            <p>CLICK BELOW TO PROCEED FOR THE TEST</p>
            <button type="submit" name="jobapply" value="<?php echo $_SESSION['jobapplyid'];?>"> TAKE TEST</button>
        </div>
            
        </form>
    </body>
</html>


