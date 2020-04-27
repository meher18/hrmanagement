



<html>
    <head>
        <title>
            Student Sign Up Page
        </title>
        <link href="student_signup.css" rel="stylesheet">
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
            <form  action="student_signup.php" method="POST" >
                <input type="text" class="firstname" placeholder="PLEASE ENTER YOUR FIRST NAME" name="firstname">
                <input type="text" class="lastname" placeholder="PLEASE ENTER YOUR LAST NAME" name="lastname">
                <h4>Select your gender :</h4>
                <div style="display: flex;align-content: center;justify-content: space-around;align-items: center;flex-direction: row">
                    <input type="radio" name="gender" value="male" class="radio">MALE 
                <input type="radio" name="gender" value="female" class="radio">FEMALE
                </div>
                <input type="date" class="date" placeholder="PLEASE ENTER YOUR D.O.B" name="date">
                <input type="text" class="coll_name" placeholder="ENTER YOUR COLLEGE NAME " name="coll_name" >
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


            $firstname = $_POST['firstname'];
            $secondname = $_POST['lastname'];
            $date = date($_POST['date']);
            $college = $_POST['coll_name'];
            $gender = $_POST['gender'];

            $email = $_POST['email'];
            $password = $_POST['conf_pass'];
            $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));
            $query = "insert into student_details(first_name,last_name,gender,dob,college_name,pass,email) values('$firstname','$secondname','$gender','$date','$college','$password','$email')";
            $insert_details = mysqli_query($connect, $query)or die(mysqli_error($connect));

             header("location: student_login.php");
          
        }
        ?>


    </body>
</html>
