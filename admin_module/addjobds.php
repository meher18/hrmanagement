<html>
    <head>
        <title>add jobs</title>
        <link rel="stylesheet" href="addjobcss.css" />
         <script>
        onload(function onloa(){
                document.getElementsByTagName("form").onsubmit="false";
            });
    </script>
        <script>
            
            
            var string = "";
            var string2 = "";
            function addSkill() {
                var a = document.getElementById("skill_input").value;
                var skills = document.getElementById("skills");

                if (string == "") {
                    b = document.createTextNode = a;
                } else {
                    b = document.createTextNode = "," + a;
                }
                string += b;
                //string2+=b;

                skills.value = string;
                                var a = document.getElementById("skill_input").value=null;

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
        </script>
    </head>
    <body>
        <form class="form-container" action="addjobds.php" method="POST" >
            <div class="form_1">
              
                <div class="form-1">
      <?php
                 session_start();
   $adminname= $_SESSION['username'];
      $connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));


     
          if (isset($_POST['on'])) {
   
       $query1="select jobid from jobs  order by jobid desc";
          $exec1= mysqli_query($connect,$query1 );
         $row= mysqli_fetch_array($exec1);
         echo "job id:".($row['jobid']+1);
          }
          else{
                 $query1="select jobid from jobs  order by jobid desc";
          $exec1= mysqli_query($connect,$query1 );
         $row= mysqli_fetch_array($exec1);
        echo "job id:". ($row['jobid']+1);
          }
  
?>
                    <input type="text" name="job_name" placeholder="JOB NAME " required="true"/>
                    <input type="text" name="company_name" placeholder="COMPANY NAME " required="true"/>
                    <input type="text" name="location" placeholder="Enter Address " required="true"/>
                    <label for="details">ENTER THE JOB DETAILS</label>
                    <textarea name="details" cols="50" rows="10" required="true"></textarea>
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
                        <textarea id="skills" name="skillnames" aria-valuetext="returna()"  readonly cols="50" rows="10"   required="true" ></textarea>

                    </div>
                    <div class="a">
                        Enter the experience required :
                        <input
                            type="text"
                            name="experience"
                            placeholder=" EXPERIENCE "
                            required="true"
                            />
                        Enter the company name required :

                        <input
                            type="text"
                            name="salary"
                            placeholder=" ENTER SALARY "
                            required="true"
                            />
                    </div>
                </div>
            </div>
            <div class="submit">

                <button type="submit" class="submit-btn" name="on" value="off"  >ADD JOB</button>
            </div>
        </form>

     
        <div>
            <a href="viewJobs.php">View Jobs</a>
        </div>
    </body>
     <?php
 if (isset($_POST['on'])) {
          

      
        
            $jobname = mysqli_real_escape_string($connect,$_POST['job_name']);
            $companyname = mysqli_real_escape_string($connect,$_POST['company_name']);
            $location =mysqli_real_escape_string($connect, $_POST['location']);
            $jobdetails = mysqli_real_escape_string($connect,$_POST['details']);
            $experience=mysqli_real_escape_string($connect,$_POST['experience']);
            $salary=mysqli_real_escape_string($connect,$_POST['salary']);
         
            $skills =mysqli_real_escape_string($connect,$_POST['skillnames']);
        
              $query = "insert into jobs(jobname,company,address,jobdetails,skills,experience,salary,adminname) values('$jobname','$companyname','$location','$jobdetails','$skills','$experience','$salary','$adminname') ";
              $exec= mysqli_query($connect, $query) or die(mysqli_error($connect)) ;
              if($exec)
              {
                 echo "inserted"; 
              }
              else{
                  echo "sorry there was a problem unable to insert";
              }
          
         
          
}
?>
      
</html>
