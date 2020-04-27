<html>
    <head>
        <link href="viewJobs.css" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start();
        $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));
        $adminname = $_SESSION['username'];
        $query = "select * from jobs where adminname='$adminname'";
        $exec = mysqli_query($connect, $query) or die(mysqli_error($connect));
        ?> 
        <div style="text-align: center"> <h1><?php echo "<h1>hello $adminname this are your added jobs</h1>"; ?></h1>
        </div>
  <?php 
  $row = mysqli_fetch_array($exec);
                        if($row[0]==null){
                            echo '<h1 style="text-align:center"> No added jobs please add jobs </h1>';
                        }
                        ?>

        <div class="job-body">
         
            
<?php 

       $exec1 = mysqli_query($connect, $query) or die(mysqli_error($connect));
while ($row = mysqli_fetch_array($exec1)) { ?>

                <div class="job-container">
                    <div class="job">
                      
                  
   
                        <h1 class="company">COMPANY :<?php echo $row[2]; ?></h1></br>
                        <h2 class="jobname">JOB NAME :<?php echo $row[1]; ?></h2></br>
                        <h3 class="location">LOCATION :<?php echo $row[3]; ?></h3</br>
                        <h4 class="jobdetails">JOB details :<?php echo $row[4]; ?></h4></br>
                        <h4 class="skills">SKILLS :<?php echo $row[5]; ?></h4></br>
                        <h4 class="experience"> EXPERIENCE :<?php echo $row[6]; ?></h4></br>
                        <h4 class="salary">SALARY :<?php echo $row[7]; ?></h4></br>

                    </div>
                    <form action="viewJobs.php" method="GET">
                        
                        <button name="deletejob" value="<?php echo $row[0];?>">Delete Job</button>
                    </form>
                </div>


                        <?php } ?>
        </div>
    </body>
<?php 

if(isset($_GET['deletejob']))
  {
     $jobid=$_GET['deletejob'];
    $query1 = "delete from jobs where jobid='$jobid'";
    $exec1= mysqli_query($connect, $query1);
    
    

}

?>



</html>

