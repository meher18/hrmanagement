



<html>
    <head>
        <title>
            Student Sign Up Page
        </title>
        <link href="student_signup.css" rel="stylesheet">
        <script src="../js/jquery.js" >
        
        
        
        </script>
        
           
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


            $(document).ready(function(){
                $('.datepicker').datepicker();
            })
        </script>

    </head>
    <body>


        <div class="form" >
            <form  action="student_signup.php" method="POST" >
                <h3>HELLO YOU CAN REGISTER HERE</h3>
                <input type="text" class="firstname center" placeholder="PLEASE ENTER YOUR FIRST NAME" name="firstname">
                <input type="text" class="lastname center" placeholder="PLEASE ENTER YOUR LAST NAME" name="lastname">
                <h4>Select your gender :</h4>
                <div style="display: flex;align-content: center;justify-content: space-around;align-items: center;flex-direction: row">
                  <p><label > <input  type="radio" name="gender" value="male" class="radio"><span>MALE</span></label></p>
               <p><label > <input  type="radio" name="gender" value="female" class="radio"><span>FEMALE</span></label></p>
                </div>
                <input type="text" class="datepicker " placeholder="PLEASE ENTER YOUR D.O.B" name="date">
                <input type="text" class="coll_name" placeholder="ENTER YOUR COLLEGE NAME " name="coll_name" >
                <input type="email" class="email" placeholder="PLEASE ENTER YOUR EMAIL ID" name="email">
                <input type="password" class="password" placeholder="PLEASE ENTER YOUR PASSWORD" name="password" id="pass1">

                <input type="password" class="password" placeholder="CONFIRM YOUR PASSWORD" name="conf_pass" id="pass2" oninput="validate()" >
                <label for="conf_pass" style="color:red" id="error_label"></label>



                <button class="btn fourth "  name="sign_up" value="on">Sign  up</button>


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

    <script>
    
    </script>
</html>
