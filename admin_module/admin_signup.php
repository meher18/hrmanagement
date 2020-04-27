

<html>
    <head>
        <title>
            Admin Sign Up Page
        </title>
        <link href="signup.css" rel="stylesheet">
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
            <form  action="admin_signup.php" method="POST" >
                <input type="text" class="user_name" placeholder="PLEASE ENTER YOUR USER NAME" name="username">
                <input type="email" class="email" placeholder="PLEASE ENTER YOUR EMAIL ID" name="email">
                <input type="password" class="password" placeholder="PLEASE ENTER YOUR PASSWORD" name="password" id="pass1">

                <input type="password" class="password" placeholder="CONFIRM YOUR PASSWORD" name="conf_pass" id="pass2" oninput="validate()" >
                <label for="conf_pass" style="color:red" id="error_label"></label>



                <button class="btn fourth"  name="sign_up" value="on">Sign  up</button>


            </form>

        </div>
        <?php
        if (isset($_POST['sign_up'])) {
            insert_details();
        }

        function insert_details() {


            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['conf_pass'];
            $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));
            $query = "insert into admin_details(user_name,email,password) values('$username','$email','$password')";
            $insert_details = mysqli_query($connect, $query)or die(mysqli_error($connect));

            header("location: admin_login.php");
        }
        ?>


    </body>
</html>
