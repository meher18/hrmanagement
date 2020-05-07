
<!doctype html>
<html>
    <head>

        <title>
            Hr Login Page 
        </title>
        
        <link href="HR_loginStyle.css" rel="stylesheet">
        <!--         for the material css -->

<!--         Compiled and minified CSS -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
         <!--for the material icons-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--         Compiled and minified JavaScript -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    </head>
    <body>


        <div class="form" >

            <form action="hrLogin.php" method="POST">
                <h2 style="font-family: sans-serif">HR LOGIN HERE</h2>
                <input type="text" class="user_name" placeholder="ENTER YOUR NAME PLEASE " name="hr_name" required="true">
                <input type="password" class="password" placeholder="ENTER PASSWORD PLEASE" name="password" required="true">
                <button class="btn fourth waves-effect"  type="submit" value="on" name="on" >Login</button>
 <?php
        if (isset($_POST['on'])) {
            validate();
        }

        function validate() {


            $hrname = $_POST['hr_name'];

            $password = $_POST['password'];
            $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));
            $query = "select * from Hr_details where hr_name='$hrname'";
            $getpassword = mysqli_query($connect, $query)or die(mysqli_error($connect));
            $row = mysqli_fetch_array($getpassword);
            if ($password == $row['password']) {

                valid($hrname);
            } else {
                invalid();
            }
        }

        function valid($name) {
            header("location: HR_job.php?hr_name=$name");
            session_start();
            $_SESSION['hr_name'] = $name;
        }

        function invalid() {
            echo '<h1 style="color:red;display:flex;align-content:center;align-items:center;justify-content:space-evenly;border:2px dashed black;padding 10px;"> In Valid password </h1>';
        }
        
        ?>

            </form>

        </div>
       
    </body>
</html>
