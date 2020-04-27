<!doctype html>
<html>
    <head>
        <title>
            Admin Login Page 
        </title>
        <link href="adminJobStyle.css" rel="stylesheet">
    </head>
    <body>
        <?php
        ?> 
        <nav class="navbar">
            <div class="links">
                <ul>
                    <li><a href="addjobds.php">ADD JOBS</a>
                    <li><a href="ADDHr.php">ADD HR DETAILS</a></li>
                    <li><a href="viewHR.php">VIEW HR</a></li>
                    <li><a href="logout.php">LOG-OUT</a></li>

                </uL>

            </div>
        </nav> 
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../index.php");
}
echo $_SESSION['username'];

$adminname = $_GET['adminname'];
echo '<h1 style="color:aqua;display:flex;align-items:center;align-content:center;justify-content:space-around">Hello ' . "$adminname welcome to your module</h1>";
?>

    </body>
</html>
