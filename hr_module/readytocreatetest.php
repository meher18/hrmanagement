<html>
    <head>
        <link href="readytocreatecss.css" rel="stylesheet">
         <!-- for the material css -->

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



        <!-- for the material icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <script>
        function  namechange(id)
        {

            var a = document.getElementById("" + id).innerHTML;
            document.getElementById("" + id).value = a.substr(18, a.length);
        }

    </script>
    <body>
        <?php
        session_start();
        $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

        $query = "select * from jobs ";
        $exec = mysqli_query($connect, $query) or die(mysqli_error($connect));
        ?> 
        <div style="text-align: center" class="heading"> <h4><?php echo "hello ". $_SESSION['hr_name']." create test for this jobs"; ?></h4>
        </div>


        <div class="job-body">


            <?php while ($row = mysqli_fetch_array($exec)) { ?>

                <div class="job-container">
                    <div class="job">
                        <h5 class="jobid">JOB ID :<?php echo $row[0]; ?></h1></br>
                        <h6 class="company">COMPANY :<?php echo $row[2]; ?></h1></br>
                        <h6 class="jobname">POSITION :<?php echo $row[1]; ?></h2></br>
                        <h6 class="location">LOCATION :<?php echo $row[3]; ?></h3</br>
                        <h6 class="skills">SKILLS :<?php echo $row[5]; ?></h4></br>


                    </div>
                    <form action ="createTest.php" >
                        <button class="button"  name="jobid" onclick="namechange(this.id)" value="on" > Create test <?php echo "for :" . $row[0]; ?> </button>

                    </form>
                </div>


            <?php } ?>

        </div>
    </body>

    <script>


        var b = document.getElementsByClassName("button");
        var c = 0;
        for (item = 0; item < b.length; item++) {

            b[item].id = "button" + (c++);

        }
    </script>



</html>
