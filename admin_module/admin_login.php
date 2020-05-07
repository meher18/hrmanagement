<!doctype html>
<html>
    <head>
        <title>
            Admin Login Page 
        </title>
        <link href="admin_loginStyle.css" rel="stylesheet">
        
         <link href="stu_login.css" rel="stylesheet">
<!--         for the material css -->

<!--         Compiled and minified CSS -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
         <!--for the material icons-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--         Compiled and minified JavaScript -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    </head>
    <body>

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
        <div class="form " >
            <form  action="admin_login.php" method="POST">
                <h2 style="font-family: sans-serif">ADMIN LOGIN HERE</h2>
                  
                <input type="text" class="user_name" placeholder="ENTER USER NAME PLEASE " name="username" required="true">
                <input type="password" class="password" placeholder="ENTER PASSWORD PLEASE" name="password" required="true">
                <button class="btn fourth waves-effect"  type="submit" value="on" name="on" >Login</button>

                <div>
                    <h4>or sign up here > > <a href="admin_signup.php" class="signuplink"> SIGN UP</a></h4>
           
                </div>
                  <?php
        if (isset($_POST['on'])) {
            validate();
        }

        function validate() {


            $username = $_POST['username'];

            $password = $_POST['password'];
            $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));
            $query = "select * from admin_details where user_name='$username'";
            $getpassword = mysqli_query($connect, $query)or die(mysqli_error($connect));
            $row = mysqli_fetch_array($getpassword);
            if ($password == $row['password']) {
                valid($username);
            } else {
                invalid();
            }
        }

        function valid($name) {
            header("location: adminjob.php?adminname=$name");
            session_start();
            $_SESSION['username'] = $name;
}
                   
            function invalid() {
            echo '<h1 style="color:red;display:flex;align-content:center;align-items:center;justify-content:space-evenly;border:2px dashed black;padding 10px;"> In Valid password </h1>';
        }?>

        
            </form>

        </div>
      
       
        
    </body>
</html>
