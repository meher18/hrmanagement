

<?php
session_start();
  if(!isset($_POST['on']))
  {
  
$_SESSION['jobapplyid']= $_POST['jobapply'];
$jobid = $_SESSION['jobapplyid'];

  }
?>
<?php
$connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));



 $jobapply=$_SESSION['jobapplyid'];

  echo $jobapply;
$query1 = "select * from jobs  where jobid='$jobapply'";
$exec1 = mysqli_query($connect, $query1);
$row = mysqli_fetch_array($exec1);
?>

<html>
    <head>
        <title>add jobs</title>
        <link rel="stylesheet" href="createResumecss.css" />
        <script>
            onload(function onloa() {
                document.getElementsByTagName("form").onsubmit = "false";
            });
        </script>
        <script>


            var string = "";
            var string2 = "";
            function addSkill() {
                
                var a = document.getElementById("skill_input").value;
                if(a!="")
                {
                var skills = document.getElementById("skills");

                if (string == "") {
                    b = document.createTextNode = a;
                } else {
                    b = document.createTextNode = "," + a;
                }
                string += b;
                //string2+=b;

                skills.value = string;
                var a = document.getElementById("skill_input").value = null;
            }

            }
            function removeSkill() {
                d = string.lastIndexOf(",");
                var skills = document.getElementById("skills");
                e = createTextNode = string.substring(0, d);
                //  if(string.indexOf(',')==string.length)
                //  {
                //    e=document.createTextNode=string.substring(0,d);
                //  }
                //  else{
                //   var g=string.substring(0,d);
                //       var l=g.lastIndexOf(',');
                //       e=document.createTextNode=string.substring(0,l);
                //  }
                skills.value = e;
                // string2=e;
                string = e;

                skills.value = e;
            }
            function returna() {
                return string;
            }









            var string1 = "";
            var string3 = "";
            function addSkill1() {
                var a1 = document.getElementById("hobby_input").value;
                if(a1!="")
                {
                var skills1 = document.getElementById("hobbies");

                if (string1 == "") {
                    b1 = document.createTextNode = a1;
                } else {
                    b1 = document.createTextNode = "," + a1;
                }
                string1 += b1;
                //string2+=b;

                skills1.value = string1;
                var a1 = document.getElementById("hobby_input").value = null;
            }
            }
            function removeSkill1() {
                d1 = string1.lastIndexOf(",");
                var skills1 = document.getElementById("hobbies");
                e1 = createTextNode = string1.substring(0, d1);
                //  if(string.indexOf(',')==string.length)
                //  {
                //    e=document.createTextNode=string.substring(0,d);
                //  }
                //  else{
                //   var g=string.substring(0,d);
                //       var l=g.lastIndexOf(',');
                //       e=document.createTextNode=string.substring(0,l);
                //  }
                skills1.value = e1;
                // string2=e;
                string1 = e1;

                skills1.value = e1;
            }
            function returna1() {
                return string1;
            }
        </script>
    </head>
    <body>
        <form class="form-container" action="resumecreated.php" method="POST" >
            <div class="form_1_1">

                <div class="form-1">

                    <input  class="name" type="text" name="studentname" placeholder="student name" required="true"/>


                    <div class="gender">
                        select your gender :
                        <input type="radio" name="gender" value="male" >MALE
                        <input type="radio" name="gender" value="female">FEMALE

                    </div>

                    <input class="date" type="date" name="dob" placeholder="Date of birth" required="true"/>
                    <input class="email" type="email" name="email" placeholder="Enter your email" required="true"/>
                    <input class="phone" type="text" name="phone" placeholder="Phone number" required="true"/>
                    Enter your address
                    <textarea class="address" type="text" name="address" placeholder="Enter Address" required="true" rows="5"  cols="15" ></textarea>
                    <input class="college" type="text" name="college" placeholder="Enter your college name" required="true"/>




                </div>
                <div class="qualifications">
                    ENTER YOUR QUALIFICATIONS
                    <textarea name="qualifications" cols="50" rows="10" required="true"></textarea>

                    <div style="color:red">
                        <?php
                        echo $row['experience'] . " of experience is expected by the company you selected";
                        ?>

                    </div>
                </div>
            </div>
            <div class="form-2-container">
                <div class="form-2">
                    <div class="skill_container">

                        <input
                            id="skill_input"
                            type="text"
                            name="skills"
                            placeholder="PLEASE ADD  SKILL HERE"

                            /><button type="button" id="add_skill" onclick="addSkill()">
                            Add Skill here
                        </button>

                        <button type="button" id="remove_skill" onclick="removeSkill()">
                            Remove Skill 
                        </button>
                        <div style="color:white">
                                 <?php
                        echo "The required skills mentioned by the company you choose are :".$row['skills'] ;
                        ?>
                        </div>
                        <textarea id="skills" name="skills" aria-valuetext="returna()"  readonly cols="50" rows="10"   required="true" ></textarea>

                    </div>
                    <div class="hobbies_contianer">
                        <input
                            id="hobby_input"
                            type="text"
                            name="skills"
                            placeholder="PLEASE ADD HOBBIES"

                            /><button type="button" id="add_hobby" onclick="addSkill1()">
                            ADD HOBBY
                        </button>

                        <button type="button" id="remove_hobby" onclick="removeSkill1()">
                            REMOVE HOBBY
                        </button>
                        <textarea id="hobbies" name="hobbies" aria-valuetext="returna1()"  readonly cols="50" rows="10"   required="true" ></textarea>

                    </div>

                </div>
                <div class="jobposition">
                    your expected job position :
                    <input
                        type="text"
                        name="jobposition"
                        placeholder=" JOB POSITION "
                        required="true"
                        />


                </div>
            </div>
            <div class="submit">

             <button type="submit" class="submit-btn"  name="on" value="off"  >CREATE RESUME</button>
            </div>
        </form>
       
        <form action="resumecreated.php">
            <button style="display: none" type="submit" class="submit-btn"  name="on" value="off"  >CREATE RESUME</button>
        </form>

    </body>
   


</html>

