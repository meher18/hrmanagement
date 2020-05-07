<!doctype html>
<html>
    <head>
        <title>
            Admin Login Page 
        </title>
        <link href="adminJobStyle.css" rel="stylesheet">
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
        <?php
        ?> 
        <nav class="navbar">
            <div class="links ">
                <ul>
                    <li class="waves-effect"><a href="addjobds.php"><i class="material-icons">add</i>ADD JOBS</a>
                    <li class="waves-effect"><a href="ADDHr.php"><i class="material-icons">add</i>ADD HR DETAILS</a></li>
                    <li class="waves-effect"><a href="viewHR.php"><i class="material-icons">people</i>VIEW HR</a></li>
                    <li class="waves-effect"><a href="logout.php">LOG-OUT</a></li>

                </uL>

            </div>
        </nav> 
<div class="container">
    <?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../index.php");
}


$adminname = $_GET['adminname'];
echo '<h1 >Hello ' . "$adminname welcome to your module</h1>";
?>
<div class="container1">
    <h3>Have a nice day ahead</h3>
</div>
</div>
<script>

</script>
    </body>
</html>
