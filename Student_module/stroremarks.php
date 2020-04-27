<?php 


$connect = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($connect));

$marks=$_GET['marks'];
$jobid=$_GET['jobid'];
$studentresumeid=$_GET['resumeid'];
$query1 = "insert into marks(marks,student_id,jobid) values('$marks','$studentresumeid','$jobid')";
$exec1 = mysqli_query($connect, $query1);
if($exec1){
    echo mysqli_insert_id($connect)."-inserted";
}
else{
    echo "unable to insert";
}


?>
