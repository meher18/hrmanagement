<?php
session_start();

if (!isset($_POST['on']) and !isset($_POST['button']) ) {
    $_SESSION['jobid'] = $_GET['jobid'];
    echo "create test for job id 1 " . $_SESSION['jobid'];
}
if( isset($_POST['button']))
{
    session_reset();
    echo "create test for the jobid ".$_SESSION['jobid'];
    
}
else if(isset ($_POST['on']))
{
    echo "create test for job id 1 " . $_SESSION['jobid'];
}

//else{
//    echo "create test for job id2 " . $_SESSION['jobid'];
// 
//}
?> 

<html>
    <head>
        <title>Create test </title>
        <link href="createTestcss.css" rel="stylesheet">
           <script type="text/javascript">
    if (window.performance && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) {
        location.reload();
    }
</script>

        <script>
            function add()
            {
                var a = document.getElementById("1").value;
                var b = document.getElementById("2").value;
                var c = document.getElementById("3").value;
                var d = document.getElementById("4").value;
                var e = document.getElementById("5").value = a + "," + b + "," + c + "," + d;

            }
            function check()
            {
                if (document.getElementById("radio1").checked) {
                    var e = document.getElementById("5").value += "," + 1;
                }
                if (document.getElementById("radio2").checked) {
                    var e = document.getElementById("5").value += "," + 2;

                }
                if (document.getElementById("radio3").checked) {
                    var e = document.getElementById("5").value += "," + 3;

                }
                if (document.getElementById("radio4").checked) {
                    var e = document.getElementById("5").value += "," + 4;

                }


            }


            function  namechange(id)
            {

                var a = document.getElementById("" + id).innerHTML;
                document.getElementById("" + id).value = a;
                document.load();
            }

        </script>

    </head>
    <body>
        <form action="createTest.php" method="POST" >
            <input type="text" name="question"  placeholder="question" required="true"> 
            <br>
            <input type="radio" name="answer" id="radio1" required="true"><input type="text" name="answer1" placeholder="answer1" id="1" required="true"> 
            <br>
            <input type="radio" name="answer" id="radio2" required="true"><input type="text" name="answer2" placeholder="answer2" id="2" required="true"> 
            <br>
            <input type="radio" name="answer" id="radio3" required="true "><input type="text" name="answer3" placeholder="answer3" id="3" required="true"> 
            <br>

            <input type="radio" name="answer" id="radio4" required="true"><input type="text" name="answer4" placeholder="answer4" onchange="add()" id="4" required="true" > 
            <br>
            <input type="text" name="answer5" style="visibility: hidden" id="5" required="true"> 
            <br>
            <button type="submit" name="on" value="on" onclick="check()" >    Submit
            </button>

        </form>
        <?php
        $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

        $hr_name = $_SESSION['hr_name'];
        $testjobid = $_SESSION['jobid'];
        if (isset($_POST['on'])) {
            //$testjobid = $_SESSION['jobid'];

            $question = $_POST['question'];
            $answer = $_POST['answer5'];
            //$hr_name = $_SESSION['hr_name'];


            $query = "insert into tests(testjobid,question,answer,hr_name)values('$testjobid','$question','$answer','$hr_name') ";
            $exec = mysqli_query($connect, $query) or die(mysqli_error($connect));

//            if ($exec) {
//                echo "inserted";
//            } else {
//                echo "unable to insert";
//            }
        }
        ?>
        <!--                <div>
                            <form action="createTest.php"  method="POST">
                
                             
                                    
                
                            </form>
                          
                
                        </div>-->
        <?php
        $query1 = "select * from tests where hr_name ='$hr_name'  and testjobid='$testjobid'";
        $exec1 = mysqli_query($connect, $query1) or die(mysqli_error($connect));
        ?>

        <?php while ($row = mysqli_fetch_array($exec1)) { ?>
            <?php
            $arr = explode(',', $row['answer']);
            ?>

            <div class="question-container">
                <div class="question">
                    <?php echo $row['question'] ?>
                </div>
                <div class="answer1">
                    <?php echo $arr[0] ?>
                </div> 
                <div class="answer2">
                    <?php echo $arr[1] ?>
                </div> 
                <div class="answer3">
                    <?php echo $arr[2] ?>
                </div>

                <div class="answer4">
                    <?php echo $arr[3] ?>
                </div>

                <div class="answer4">
                    <?php echo"answer: " . $arr[4]; ?>
                </div>
            </div>
            <form action="createTest.php" method="POST">

               To delete this double click : <button onclick="namechange(this.id)" class="button"  name="button"  type="submit"><?php echo $row['questionid'] ?></button>


            </form>



        <?php } ?>

    </body>
    
    
    <?php 
   if(isset($_POST['button']))
       
   {
       $questionid=$_POST['button'];
       $query2="delete from tests where questionid='$questionid' and testjobid='$testjobid'";
       $exec2= mysqli_query($connect, $query2);
//       if($exec2)
//       {
//           echo "deleted all is well";
//       }
//       else{
//           echo "unable to delete";
//       }
 
    mysqli_kill($connect, mysqli_thread_id($connect));
   }
  
    ?>
    <script>


        var b = document.getElementsByClassName("button");
        var c = 0;
        for (item = 0; item < b.length; item++) {

            b[item].id = "button" + (c++);

        }
        
        
        
 
    </script>
           
     


</html>