<!doctype html>
<html>
    <head>
        <title>
            student Login Page 
        </title>
        <link href="stu_login.css" rel="stylesheet">
    </head>
    <body>
    <?php
session_start();
if (isset($_SESSION['firstname'])) {
    header("location: ../index.php");
}


?>
        <!-- <nav class="navbar">
           <div class="links">
               <ul>
                   <li><a href="#">ADD REQUIREMENT</a>
                   <li><a href="#">ADD HR DETAILS</a></li>
                   <li><a href="#">VIEW HR</a></li>
                   <li><a href="#">LOG-OUT</a></li>

               </uL>

           </div>
        </nav> -->
        <div class="form" >
            <form action="student_login.php" method="POST">
                <h2 style="font-family: sans-serif">STUDENT LOGIN HERE</h2>

                <input type="text" class="first_name" placeholder="ENTER USER FIRST NAME PLEASE " name="firstname" required="true">
                <input type="password" class="password" placeholder="ENTER PASSWORD PLEASE" name="password" required="true">
                <button class="btn fourth"  type="submit" value="on" name="on" >Login</button>

                <div>
                    <h4>or sign up here > > <a href="student_signup.php" class="signuplink"> SIGN UP</a></h4>

                </div>
                <?php
                if (isset($_POST['on'])) {
                    validate();
                }

                function validate() {


                    $username = $_POST['firstname'];

                    $password = $_POST['password'];
                    $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));
                    $query = "select * from student_details where first_name='$username'";
                    $getpassword = mysqli_query($connect, $query)or die(mysqli_error($connect));
                    $row = mysqli_fetch_array($getpassword);
                    if ($password == $row['pass']) {
                        valid($username);
                    } else {
                        invalid();
                    }
                }

                function valid($name) {
                    echo "valid";
                       session_start();
                    $_SESSION['firstname'] = $name;
                    header("location: student_module.php?firstname=$name");
                 
                }

                function invalid() {
                    echo '<h1 style="color:red;display:flex;align-content:center;align-items:center;justify-content:space-evenly;border:2px dashed black;padding 10px;"> In Valid password </h1>';
                }
                ?>


            </form>

        </div>



    </body>
</html>
