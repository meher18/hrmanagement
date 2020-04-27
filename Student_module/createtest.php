<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link href="createTestcss.css" rel="stylesheet">
    </head>
    <?php
    session_start();
        

    if (!isset($_GET['ok'])) {
        $jobapply = $_POST['jobapply'];

        $_SESSION['jobapplyid'] = $jobapply;
 echo $jobapply;
        
        $studentresumeid=$_SESSION['studentresumeid'];
        
    }
    ?>
    <script>
        var a = 5;
        function set_time_interval() {
            a--;
            document.getElementById("timeshow").innerHTML = a + " seconds";
            if (a <= 0) {
                clearInterval(id);
                document.getElementById("ok").value = "on";
                document.getElementById("ok").click();
            }
        }
        id = setInterval(set_time_interval, 1000);
        function cancel() {
            clearInterval(id);
            document.getElementById("ok").value = "off";
            document.getElementById("ok").click();

        }

    </script>
    <script>



    </script>
    <body>

        <div class="timeshow">
            <h1 id="timeshow">20 seconds</h1>
        </div>
        <div class="container">
            <div class="h1">
                <h1>Ok! creating the test for you please wait for twenty seconds...</h1>
            </div>
            <h2 class="h1">
                Once the test is started your gonna provided with some  (time limit)
                be ready for that...
            </h2>
            <h2 class="h2">
                Else you don't want to give the test then your can leave the page by
                clicking the cancel button
            </h2>
        </div>
        <div id="form">
            <form action="createtest.php">
                <button
                    type="submit"
                    id="ok"
                    name="ok"

                    style="visibility: hidden;"
                    >
                    ok
                </button>
            </form>

            <button class="button" type="submit" onclick="cancel()">cancel</button>
        </div>
    </body>
</html>
<?php
if (isset($_GET['ok'])) {

    if ($_GET['ok'] == "on") {
        header("location: taketest.php");
    }
    if ($_GET['ok'] == "off") {
        header("location: student_module.php");
    }
}
?>
