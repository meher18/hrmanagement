<html>
    <head>
        <link href="selectstudentcss.css" rel="stylesheet">

        
        <!-- for the material css -->

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



        <!-- for the material icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




    </head>
    <script>





    </script>
    <body>
        <?php
        session_start();
        $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

        $query = "select * from resumes ";
        $exec = mysqli_query($connect, $query) or die(mysqli_error($connect));
        ?> 
        <div style="text-align: center" class="heading"> <h4><?php echo " please select students"; ?></h4>
        </div>


        <div class="job-body container">


            <?php while ($row = mysqli_fetch_array($exec)) { ?>

                <div class="job-container card ">

                    <div class="job">
                        <h4 >Resume id :<?php echo $row[0]; ?></h4></br>

                        <h4 class="company">student name :<?php echo $row[1]; ?></h1></br>
                        <h5 class="jobname">gender :<?php echo $row[2]; ?></h2></br>
                        <h5 class="location">dob :<?php echo $row[3]; ?></h3</br>
                        <h5 class="jobdetails">email :<?php echo $row[4]; ?></h4></br>
                        <h5 class="phone">phone :<?php echo $row[5]; ?></h4></br>
                        <h5 class="experience"> address :<?php echo $row[6]; ?></h4></br>
                        <h5 class="salary">college :<?php echo $row[7]; ?></h4></br>
                        <h5 class="qualifications">qualifications :<?php echo $row[8]; ?></h4></br>
                        <h5 class="skills">skills:<?php echo $row[9]; ?></h4></br>
                        <h5 class="skills">hobbies:<?php echo $row[10]; ?></h4></br>
                        <h5 class="jobposition">job position:<?php echo $row[11]; ?></h4></br>
                    </div>

                    <div>

                        <p id="marks<?php echo $row[0]; ?>"></p>
                        <button class="btn" onclick="checkmarks(this.value)"  value="<?php echo $row[0]; ?>" ><i class="material-icons">check</i>check marks<?php echo $row[0]; ?> </button>
                        <button class="btn" onclick="select(this.value)"  value="<?php echo $row[0]; ?>" ><i class="material-icons">add</i> SELECT <?php echo $row[0]; ?> </button>
                        <button class="btn" onclick="sendmail(this.value)" id="<?php echo $row[0]; ?>"  style="visibility: hidden"  value="<?php echo $row[0]; ?>" >SEND MAIL<?php echo $row[0]; ?> </button>
                        <button class="btn" onclick="unselect(this.value)"  value="<?php echo $row[0]; ?>" >UNSELECT<?php echo $row[0]; ?> </button>
                        <p id="result<?php echo $row[0]; ?>"></p>
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





        function  select(value)
        {


            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200)
                {

                    document.getElementById("result" + value).innerHTML = this.responseText;
                    if(this.responseText=="selected")
                    document.getElementById(value).style.visibility = "visible";

                }
            };
            xmlhttp.open("GET", "select.php?resumeid=" + value, true);
            xmlhttp.send();
        }
        function  unselect(value)
        {


            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200)
                {

                    document.getElementById("result" + value).innerHTML = this.responseText;
                       if(this.responseText=="unselected")
                    document.getElementById(value).style.visibility = "hidden";
                }
            };
            xmlhttp.open("GET", "unselect.php?resumeid=" + value, true);
            xmlhttp.send();
        }
         function  checkmarks(value)
        {


            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200)
                {

                    document.getElementById("marks" + value).innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "seemarks.php?resumeid=" + value, true);
            xmlhttp.send();
        }
        function  sendmail(value)
        {


            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200)
                {

                    document.getElementById("result" + value).innerHTML = this.responseText;
                       if(this.responseText=="unselected")
                    document.getElementById(value).style.visibility = "hidden";
                }
            };
            xmlhttp.open("GET", "sendmail.php?resumeid=" + value, true);
            xmlhttp.send();
        }

    </script>



</html>