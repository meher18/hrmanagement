<html>
    <head>
        <title>
            Admin Sign Up Page
        </title>
        <link href="ADDHRCss.css" rel="stylesheet">
           <!--         for the material css -->

        <!--         Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
        <!--for the material icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--         Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
        <script>
            function validate()
            {
                if (document.getElementById("pass1").value.toString() != document.getElementById("pass2").value.toString())
                {
                    document.getElementById("error_label").style.color = "red";
                    document.getElementById("error_label").innerHTML = "The passwords do not match :("

                } else {
                    document.getElementById("error_label").style.color = "green";
                    document.getElementById("error_label").innerHTML = "The passwords  Match :)"
                }

            }
        </script>

    </head>
    <body>


        <div class="form" >
         
            <form  action="ADDHr.php" method="POST" >
                <i class="material-icons large">person</i> 
                   <h3>ADMIN ADD NEW HR </h3>
                <input type="text" class="hr_name" placeholder="PLEASE ENTER YOUR USER NAME" name="hr_name"required>
                <input type="email" class="email" placeholder="PLEASE ENTER YOUR EMAIL ID" name="email" required>
                <input type="date" class="dob" placeholder="PLEASE ENTER YOUR D.O.B" name="dob" id="dob" required="true">

                <input type="text" class="phone" placeholder="PLEASE ENTER YOUR PHONE NO" name="phone" id="phone" required>



                <input type="password" class="password" placeholder="PLEASE ENTER YOUR PASSWORD" name="password" id="pass1" required>

                <input type="password" class="password" placeholder="CONFIRM YOUR PASSWORD" name="conf_pass" id="pass2" oninput="validate()" required >
                <label for="conf_pass" style="color:red" id="error_label"></label>



                <button class="btn fourth"  name="sign_up" value="on"> ADD HR</button>


            </form>

        </div>
        <?php
        session_start();
        if (isset($_POST['sign_up'])) {
            insert_details();
        }

        function insert_details() {


            $username = $_POST['hr_name'];
            $email = $_POST['email'];
            $password = $_POST['conf_pass'];

            $date = date($_POST['dob']);
            $phone = $_POST['phone'];
            $adminname=$_SESSION['username'];
            $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));
            $query = "insert into Hr_details(hr_name,email,dob,phone,password,adminname) values('$username','$email','$date','$phone','$password','$adminname')";
            $insert_details = mysqli_query($connect, $query)or die(mysqli_error($connect));
        }
        ?>


    </body>
</html>
