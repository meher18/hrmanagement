<!DOCTYPE html>

<?php
session_start();
if (!isset($_SESSION['hr_name'])) {
    header("location: ../index.php");
}


$hrname = $_GET['hr_name'];
?>
<html>
    <head>
        <title>
            hr Login Page
        </title>
        <link href="hr_jobcss.css" rel="stylesheet" />



        <script>
            var text = "<?php echo "Hello " ."' $hrname ' welcome to your module !"; ?>";
            
            var j = -1
            var id = setInterval(function () {
                j++;
                if (j > text.length)
                {
                    setTimeout();

                    document.getElementById("text").innerHTML = "";
                    

                }

                document.getElementById("text").innerHTML += text.charAt(j);
               
                

            }, 100);


        </script>
    </head>


    <body>
        <div class="container">
            <h1 id="text">

            </h1>
        </div>
        <nav class="navbar" onmouseover="slide()">

            <div class="container-1">
                <div class="x" id="x">
                    <p>

                       Be ready to do some cool stuff..

                    </p>

                </div>
                <div class="a" id="a">
                    <p>
                        you can view the jobs created by the admin


                    </p>

                </div>
                <div class="b" id="b">
                    <p>


                        you can select the students according to their marks 
                        scored from the questions you provide.


                    </p>

                </div>
                <div class="c" id="c">
                    <p>


                        To provide them the questions you can create the 
                        questions for the different jobs by going to the 
                        (create test) module.

                    </p>

                </div>
                <div class="d" id="d">
                    <p>


                        once you finish your work don't forget to log-out

                        Have a nice day...
                    </p>
                </div>
            </div>


            <div class="links">

                <ul>
                    <li><a href="viewaddedjobs.php" onmousemove="slide1()">VIEW JOBS</a></li>
                    <li><a href="selectstudents.php" onmousemove="slide2()">SELECT STUDENTS</a></li>
                    <li><a href="readytocreatetest.php" onmousemove="slide3()">CREATE A TEST</a></li>
                    <li><a href="hrLogout.php" onmousemove="slide4()">LOG-OUT</a></li>
                </ul>
            </div>
        </nav>
        <script>

            function slide() {


                document.getElementById("a").style.transition = "all 300ms ease-in-out";
                document.getElementById("a").style.position = "absolute";
                document.getElementById("a").style.left = "1000%";

                document.getElementById("b").style.transition = "all 300ms ease-in-out";
                document.getElementById("b").style.position = "absolute";
                document.getElementById("b").style.left = "100%";

                document.getElementById("c").style.transition = "all 300ms ease-in-out";
                document.getElementById("c").style.position = "absolute";
                document.getElementById("c").style.left = "100%";

                document.getElementById("d").style.transition = "all 300ms ease-in-out";
                document.getElementById("d").style.position = "absolute";
                document.getElementById("d").style.left = "100%";

                document.getElementById("x").style.transition = "all 300ms ease-in-out";
                document.getElementById("x").style.position = "absolute";
                document.getElementById("x").style.left = "0%";


            }
            function slide1() {


                document.getElementById("a").style.transition = "all 300ms ease-in-out";
                document.getElementById("a").style.position = "absolute";
                document.getElementById("a").style.left = "0%";

                document.getElementById("b").style.transition = "all 300ms ease-in-out";
                document.getElementById("b").style.position = "absolute";
                document.getElementById("b").style.left = "100%";

                document.getElementById("c").style.transition = "all 300ms ease-in-out";
                document.getElementById("c").style.position = "absolute";
                document.getElementById("c").style.left = "100%";

                document.getElementById("d").style.transition = "all 300ms ease-in-out";
                document.getElementById("d").style.position = "absolute";
                document.getElementById("d").style.left = "100%";

                document.getElementById("x").style.transition = "all 300ms ease-in-out";
                document.getElementById("x").style.position = "absolute";
                document.getElementById("x").style.left = "100%";


            }
            function slide2() {


                document.getElementById("b").style.transition = "all 300ms ease-in-out";
                document.getElementById("b").style.position = "absolute";
                document.getElementById("b").style.left = "0%";

                document.getElementById("a").style.transition = "all 300ms ease-in-out";
                document.getElementById("a").style.position = "absolute";
                document.getElementById("a").style.left = "100%";

                document.getElementById("c").style.transition = "all 300ms ease-in-out";
                document.getElementById("c").style.position = "absolute";
                document.getElementById("c").style.left = "100%";

                document.getElementById("d").style.transition = "all 300ms ease-in-out";
                document.getElementById("d").style.position = "absolute";
                document.getElementById("d").style.left = "100%";

                document.getElementById("x").style.transition = "all 300ms ease-in-out";
                document.getElementById("x").style.position = "absolute";
                document.getElementById("x").style.left = "100%";


            }

            function slide3() {


                document.getElementById("c").style.transition = "all 300ms ease-in-out";
                document.getElementById("c").style.position = "absolute";
                document.getElementById("c").style.left = "0%";

                document.getElementById("a").style.transition = "all 300ms ease-in-out";
                document.getElementById("a").style.position = "absolute";
                document.getElementById("a").style.left = "100%";

                document.getElementById("b").style.transition = "all 300ms ease-in-out";
                document.getElementById("b").style.position = "absolute";
                document.getElementById("b").style.left = "100%";

                document.getElementById("d").style.transition = "all 300ms ease-in-out";
                document.getElementById("d").style.position = "absolute";
                document.getElementById("d").style.left = "100%";

                document.getElementById("x").style.transition = "all 300ms ease-in-out";
                document.getElementById("x").style.position = "absolute";
                document.getElementById("x").style.left = "100%";



            }
            function slide4()
            {




                document.getElementById("d").style.transition = "all 300ms ease-in-out";
                document.getElementById("d").style.position = "absolute";
                document.getElementById("d").style.left = "0%";





                document.getElementById("c").style.transition = "all 300ms ease-in-out";
                document.getElementById("c").style.position = "absolute";
                document.getElementById("c").style.left = "100%";

                document.getElementById("a").style.transition = "all 300ms ease-in-out";
                document.getElementById("a").style.position = "absolute";
                document.getElementById("a").style.left = "100%";

                document.getElementById("b").style.transition = "all 300ms ease-in-out";
                document.getElementById("b").style.position = "absolute";
                document.getElementById("b").style.left = "100%";
                
                
                
                
                  document.getElementById("x").style.transition = "all 300ms ease-in-out";
                document.getElementById("x").style.position = "absolute";
                document.getElementById("x").style.left = "100%";

            }















        </script>
    </body>


</html>
