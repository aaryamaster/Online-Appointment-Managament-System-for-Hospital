<?php
$con = mysqli_connect("localhost","root","","projectmms") or die("Connection was not established");

if(isset($_GET['f_id'])){
    $f_id = $_GET['f_id'];

    $delete_feedback = "delete from feedback where f_id='$f_id'";

    $run_delete =mysqli_query($con,$delete_feedback);
    
    if($run_delete){
        echo "<script>alert('Feedback is deleted')</script>";
        echo "<script>window.open('viewFeedback.php','_self')</script>";
    }

}
?>