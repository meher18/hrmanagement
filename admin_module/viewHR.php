<html>
    <head>
        <link href="hrViewcss.css" rel="stylesheet">
       <!--         for the material css -->

<!--         Compiled and minified CSS -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
         <!--for the material icons-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--         Compiled and minified JavaScript -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
         
    </head>
    <body>
        <?php
        session_start();
        $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));
        $adminname = $_SESSION['username'];
        $query = "select * from hr_details where adminname='$adminname'";
        $exec = mysqli_query($connect, $query) or die(mysqli_error($connect));
        ?> 
        <div style="text-align: center"> <h1><?php echo "<h1>hello $adminname this are your added HR's</h1>"; ?></h1>
        </div>


        <div class="hr-body">


            <?php while ($row = mysqli_fetch_array($exec)) { ?>

                <div class="hr-container">
                    <div class="hr card">

                        <h4 class="hrname">HR :<?php echo $row[1]; ?></h4></br>
                        <h5 class="email">Email:<?php echo $row[2]; ?></h5></br>
                        <h5 class="dob">DOB:<?php echo $row[3]; ?></h5></br>
                        <h5 class="phone">phone:<?php echo $row[4]; ?></h5></br>
                        <h5 class="password">password:<?php echo $row[5]; ?></h5></br>




                    </div>
                    <form action="viewHR.php">
                           <button class="btn waves-effect red center" name="hrdelete" value="<?php echo $row[0] ;?>">Delete HR</button>
                    </form>
                </div>


            <?php } ?>
        </div>
    </body>
    <?php
    
    if(isset($_GET['hrdelete']))
    {
        $hrid=$_GET['hrdelete'];
        $query1 = " delete from hr_details where id='$hrid'";
        $exec = mysqli_query($connect, $query1) or die(mysqli_error($connect));
    }
    
    
    
    
    ?>




</html>

