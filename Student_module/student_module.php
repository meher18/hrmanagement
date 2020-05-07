

<?php
session_start();
if( !isset( $_SESSION['firstname']))
{
    
    header("location: ../index.php");
}



$_SESSION['testid1'] = 0;
?>

<html>
    <head>
        <title>
            Student module
        </title>
        
        
        
        
        
        
        <link href="https://fonts.googleapis.com/css?family=Abel|Cinzel|Kalam|Pacifico|Raleway|Satisfy|Shadows+Into+Light&display=swap" rel="stylesheet">
        <link href="viewjobs.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Italianno&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Faster+One|Monoton|Orbitron&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Faster+One|Monoton|Nosifer|Orbitron&display=swap" rel="stylesheet">
        <script src="../js/jquery.js" type="text/javascript"></script>

    </head>

    <script>
        var j = -1;
        var text = "Below are the JOBS you can apply for :)";
        id = setInterval(function () {
            j++;
            if (j > text.length)
            {
                clearInterval(id);
                //document.getElementById("id1").innerHTML = "";

            }
            $("#id1").css("font-family", "'Nunito', sans-serif")
            $("#id1").css("font-size", "70px");
            document.getElementById("id1").innerHTML += text.charAt(j);


        }, 100);



        var i = 0;
        function change()
        {
            var a = document.getElementById("swipe");
            if (a.innerHTML == "SEE RESUMES")
            {
                document.getElementById("jobbody").style.transition = "all 300ms ease-in-out";
                document.getElementById("jobbody").style.position = "absolute";
                document.getElementById("jobbody").style.left = "100%";



                document.getElementById("resumebody").style.transition = "all 300ms ease-in-out";
                document.getElementById("resumebody").style.position = "relative";
                document.getElementById("resumebody").style.left = "0%";
                a.innerHTML = "SEE JOBS";


                $("#logout").css("background-color", "#FB1857");
                $("#logout a").css("color", "white");
                $("#logout a").css("border", "2px dotted white");
                document.getElementById("heading").style.transition = "background-color 300ms ease-in-out";
                $("#heading").css("background-color", "white");
                document.getElementById("id1").style.color = "#FB1857";

                if (i != 0)
                {
                    clearInterval(id2);
                }

                clearInterval(id);
                i = 0;

                document.getElementById("id1").innerHTML = null;
                var j = -1;
                var text = "Below are the RESUMES you created ";
                id1 = setInterval(function () {
                    j++;
                    if (j > text.length)
                    {
                        clearInterval(id1);
                        //document.getElementById("id1").innerHTML = "";

                    }
                    $("#id1").css("font-family", "'Nunito', sans-serif")
                    $("#id1").css("font-size", "70px");
                    document.getElementById("id1").innerHTML += text.charAt(j);




                }, 100);


            } else if (a.innerHTML == "SEE JOBS")
            {
                document.getElementById("jobbody").style.transition = "all 300ms ease-in-out";
                document.getElementById("jobbody").style.position = "relative";
                document.getElementById("jobbody").style.left = "0%";



                document.getElementById("resumebody").style.transition = "all 300ms ease-in-out";
                document.getElementById("resumebody").style.position = "absolute";
                document.getElementById("resumebody").style.left = "100%";
                a.innerHTML = "SEE RESUMES";

                clearInterval(id1);
//                clearInterval(id1);

                i = i + 1;
                console.log(i);

                document.getElementById("id1").innerHTML = null;
                document.getElementById("heading").style.transition = "background-color 300ms ease-in-out";
                $("#heading").css("background-color", "#5D6D7E");

                $("#logout").css("background-color", "black");
                $("#logout a").css("color", "#5DADE2");
                $("#logout a").css("border", "2px dotted #5DADE2");

                document.getElementById("id1").style.color = "#EAECEE";
                var j = -1;
                var text = "Below are the JOBS you can apply for :)";
                id2 = setInterval(function () {
                    j++;
                    if (j > text.length)
                    {
                        clearInterval(id2);
                        //document.getElementById("id1").innerHTML = "";

                    }
                    $("#id1").css("font-family", "'Nunito', sans-serif")
                    $("#id1").css("font-size", "70px");
                    document.getElementById("id1").innerHTML += text.charAt(j);


                }, 100);

            }



        }



    </script>
    <body>

        <div class="heading" id="heading">

            <h1>
                <?php
                if (!isset($_SESSION['firstname'])) {
                    header("location: ../index.php");
                }


                $firstname = $_SESSION['firstname'];
                echo '<h1 style="color:black;display:flex;align-items:center;align-content:center;justify-content:space-around">Hello ' . "'$firstname' welcome to your module</h1>";
                ?>

            </h1>
            <h1 id="id1"></h1>
        </div>
        <div class="logout" id="logout">
            <a href="#" >>>>>SETTINGS</a>
            <a href="#" onclick="change()" id="swipe" >SEE RESUMES</a>

            <a href="logout.php">>>>>Log-out</a>

        </div>




        <?php
        $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

        $query = "select * from jobs";
        $exec = mysqli_query($connect, $query) or die(mysqli_error($connect));

        $query1 = "select * from resumes";
        $exec1 = mysqli_query($connect, $query1) or die(mysqli_error($connect));
        ?> 




        <div class="container">

            <div class="container1">




                <div class="job-body" id="jobbody">


                    <?php while ($row = mysqli_fetch_array($exec)) { ?>

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
                            <form action="createResume.php" method="POST" >

                                <button class="button" name="jobapply" value="<?php echo $row[0]; ?>">CREATE RESUME FOR THIS</button>


                            </form>
                        </div>


                    <?php } ?>
                </div>


                <div class="resume-body" id="resumebody">


                    <?php while ($row1 = mysqli_fetch_array($exec1)) { ?>

                        <div class="resume-container">
                            <div class="resume">

                                <h1 class="name">student name :<?php echo $row1[1]; ?></h1></br>
                                <h1 class="gender">gender :<?php echo $row1[2]; ?></h1></br>
                                <h2 class="dob">date of birth :<?php echo $row1[3]; ?></h2></br>
                                <h3 class="location">email :<?php echo $row1[4]; ?></h3</br>
                                <h4 class="phone">phone number<?php echo $row1[5]; ?></h4></br>
                                <h4 class="address">address :<?php echo $row1[6]; ?></h4></br>
                                <h4 class="college"> college :<?php echo $row1[7]; ?></h4></br>
                                <h4 class="qualification">qualification :<?php echo $row1[8]; ?></h4></br>
                                <h4 class="skills">skills :<?php echo $row1[9]; ?></h4></br>
                                <h4 class="hobby">hobby :<?php echo $row1[10]; ?></h4></br>
                                <h4 class="jobposition">job position expected :<?php echo $row1[11]; ?></h4></br>
                                <div class="abcde">
                                    
                                    <p><?php echo "resume id ".$row1[0];?></p>
                                    
                                    
                                    <div class="abcd" >
                                            <button onclick="checkmarks(this.value)" name="resumeid" id="a" value="<?php echo $row1[0]; ?>" >CHECK</button>
                                            <p id="<?php echo $row1[0]; ?>">SEE WEATHER YOU HAVE GIVEN THE TEST TO APPLY FOR THE JOB OR NOT !</p>
                                            <form action="createtest2.php" method="GET" >
                                                <input class="button"  name="jobapply1" value="<?php
                                                $var = getjobid($row1[0]);
                                                echo $var;
                                                ?>" style="visibility: hidden"/>
                                                <button class="button" type="submit" id="createtest<?php echo $row1[0]; ?>" name="resumeid" value="<?php echo $row1[0]; ?>" style="visibility: hidden">TAKE TEST</button>





                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>


                    <?php } ?>
                </div>


            </div>


        </div>   


        <script>



            function checkmarks(e)
            {
                var a = e;

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById(e).innerHTML = this.responseText;
                        if (this.responseText === "You have not given the test , give the test and apply with this resume")
                        {
                            document.getElementById("createtest" + a).style.visibility = "visible";
                        } else {
                            document.getElementById("createtest" + a).style.visibility = "hidden";
                        }
                    }





                };
                xhttp.open("GET", "testtakenornot.php?resumeid=" + a, true);
                xhttp.send();

            }





        </script>

    </body>
    <?php

    function getjobid($student_id) {
        $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

        $query2 = "select jobid from resumes where id='$student_id'";
        $exec2 = mysqli_query($connect, $query2) or die(mysqli_error($connect));
        $row4 = mysqli_fetch_array($exec2);
        if ($row4['jobid']) {
            return $row4['jobid'];
        } else {
            return null;
        }
    }
    ?>

</html>








