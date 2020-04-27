<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Take Test</title>
        <link rel="stylesheet" href="taketestcss.css" />
        <?php
        session_start();
        $jobid = $_SESSION['jobapplyid'];
        echo $jobid;
       $studentresumeid=$_SESSION['studentresumeid'];
       echo $studentresumeid; 
       $_SESSION['testid1']=1;
       
           if($_SESSION['testid1']==0)
           {
               echo "invalid";
    header("loaction: student_module.php");
}
        ?></head>
    <script src="../js/jquery.js"></script>
    <script>
        var a = 60;
        var m = 0;
        function set_time_interval() {
            a--;

            document.getElementById("timeshow").innerHTML =
                    "TIME LEFT = " + m + ":" + a;

            if (a <= 0) {
                a = 60;
                m = m - 1;
                if (m < 0) {
                    clearInterval(id);
                    alert("time up");
                    document.getElementById("result-button").click();
                }
            }
        }
        id = setInterval(set_time_interval, 1000);
    </script>

    <body>
        <div class="nav">
            echo "your are taking test for the job id ".$jobid." :)";
        </div>

        <div class="time">
            <p id="timeshow"> TIME LEFT = 1 min </p>
        </div>
        <?php
        $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

        $query = "select * from tests where testjobid='$jobid'";
        $exec = mysqli_query($connect, $query) or die(mysqli_error($connect));
        ?>
        <div class="question-container">
            <div class="questions">
                <?php
                $a = 0;
                while ($row = mysqli_fetch_array($exec)) {
                    $a++;
                    ?>
                    <div class="question">
                        <?php echo $a . "." . $row[2];
                        $var = explode(',', $row[3]);
                        ?>
                    </div>
                    <div class="option1">
                        <input
                            type="radio"
                            class="radio"
                            id="<?php echo $var[4] . $a; ?>"
                            value="1"
                            onselect="check_result(this.id)"
                            name="<?php echo $a; ?>"
                            />
    <?php echo $var[0]; ?>
                    </div>
                    <div class="option2">
                        <input
                            type="radio"
                            id="<?php echo $var[4] . $a; ?>"
                            value="2"
                            onselect="check_result(this.id)"
                            class="radio"
                            name="<?php echo $a; ?>"
                            />
    <?php echo $var[1]; ?>
                    </div>
                    <div class="option3">
                        <input
                            type="radio"
                            id="<?php echo $var[4] . $a; ?>"
                            value="3"
                            onselect="check_result(this.id)"
                            class="radio"
                            name="<?php echo $a; ?>"
                            />
    <?php echo $var[2]; ?>
                    </div>
                    <div class="option4">
                        <input
                            type="radio"
                            id="<?php echo $var[4] . $a; ?>"
                            value="4"
                            onselect="check_result(this.id)"
                            class="radio"
                            name="<?php echo $a; ?>"
                            /><?php echo $var[3]; ?>
                    </div>
                    <div class="answer" style="visibility: visible;">
                        <input
                            type="radio"
                            id="<?php echo $var[4] . $a; ?>"
                            value="<?php echo $var[4]; ?>"
                            onselect="check_result(this.id)"
                            class="radio"
                            name="<?php echo $a; ?>"
                            />
    <?php echo $var[4]; ?>
                    </div>

<?php } ?>
            </div>
            <form action="taketest.php" action="GET">
                <button type="button" onclick="show_result()" id="result-button" >SUBMIT</button>
                <a href="student_module.php" id="ok" style="visibility: hidden;" name="ok"> </a> 
            </form>
        </div>
        <div class="thanks" style="visibility: hidden;" >
            Thanks for taking the test
        </div>
         <div class="thanks" style="visibility: hidden;" id="timeshow">
           
        </div>

        <p id="response" style="visibility: hidden"></p>
        <script>



            result = 0;
            function check_result(b) {}
            function show_result() {
                var a = document.getElementsByClassName("radio");

                var n = 0;
                var i;
                for (i = 0; i < a.length; i++) {
                    if (n < a.length) {
                        if (a[i].checked) {
                            n += 5;
                            if (a[i].value == a[n - 1].value) {
                                result += 5;
                            }
                        }
                    }
                }
               $(".questions").slideUp(5000);
                var marks=result + "/" + ((a.length / 5) * 5);
                alert("your marks are :" + marks);


             result=0;
                clearInterval(id);
                $(".thanks").css("visibility", "visible");
                redirect();
               var xmlhttp=new XMLHttpRequest();
               xmlhttp.onreadystatechange=function (){
                   if(this.readyState==4 && this.status== 200)
                   {
                     document.getElementById("response").innerHTML = this.responseText;
                   }
      
               };
           xmlhttp.open("GET", "stroremarks.php?jobid="+<?php echo $jobid;?>+"&marks="+marks+"&resumeid="+<?php echo $studentresumeid; ?>, true);
        xmlhttp.send();
                      
            }
            
            
            
          function cancel(e)
          {$(".questions").slideUp(5000);
             e.target.preventDefault; 
              
    }
            
    function redirect()
    {
                
        
        var a =3;
        function set_time_interval() {
            a--;
            document.getElementById("timeshow").innerHTML = "redirecting in.. "+ a + " seconds ";
            if (a <= 0) {
                clearInterval(id);
                document.getElementById("ok").value = "on";
                document.getElementById("ok").click();
            }
        }
        id = setInterval(set_time_interval, 1000);
    }
        </script>
    </body>
</html>
