
<html>
    <head>
        <script>
            var a = 2;
            function count()
            {


                document.getElementById("h1").innerHTML = a + " seconds";
                a--;
                if (a <0)
                {
                    clearInterval(id);
                    document.getElementById("button").click();
                }
            }
            id = setInterval(count, 1000);


        </script>
        <link href="hrlogoutcss.css" rel="stylesheet">
    </head>
    <body>
        <div class="numbers">
        <h1 id="h1" class="number">3 seconds</h1>
        <?php
session_start();
session_unset();
session_destroy();
if (isset($_SESSION['hr_name'])) {
    echo "uanble to logout";
} else {
    logout();
}

function logout() {
    echo "succesfully logged out";



    echo "<h2>please wait redirecting to Login page </h2>";
    if (isset($_POST['click1'])) {
        header("location: hrLogin.php");
    }
}
?>
        <form action="hrLogout.php" method="post">
            <button style="visibility:hidden" id="button" name="click1" value="on" type="submit">click</button>

        </form>


    </body>



</html>

