<html>
    <head>
        <link href="viewjobcss.css" rel="stylesheet">
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
        <div style="text-align: center" class="heading"> <h1><?php echo " this are the added jobs ..."; ?></h1>
        </div>


        <div class="job-body">


            <?php while ($row = mysqli_fetch_array($exec)) { ?>

                <div class="job-container">
                 
                    <div class="job">
   <h4 >JOB ID :<?php echo $row[0]; ?></h4></br>

                        <h1 class="company">COMPANY :<?php echo $row[2]; ?></h1></br>
                        <h2 class="jobname">JOB NAME :<?php echo $row[1]; ?></h2></br>
                        <h3 class="location">LOCATION :<?php echo $row[3]; ?></h3</br>
                        <h4 class="jobdetails">JOB details :<?php echo $row[4]; ?></h4></br>
                        <h4 class="skills">SKILLS :<?php echo $row[5]; ?></h4></br>
                        <h4 class="experience"> EXPERIENCE :<?php echo $row[6]; ?></h4></br>
                        <h4 class="salary">SALARY :<?php echo $row[7]; ?></h4></br>
                    </div>

                    <!--                    <form action ="createTest.php" >
                                            <button class="button"  name="jobid" onclick="namechange(this.id)" value="on" > Create test <?php echo "for :" . $row[0] ?> </button>
                                       
                                        </form>-->
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

