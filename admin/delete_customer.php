<?php
$con = mysqli_connect("localhost","root","","projectmms") or die("Connection was not established");

if(isset($_GET['p_id'])){
    $p_id = $_GET['p_id'];

    $delete_patient = "delete from patient where p_id='$p_id'";

    $run_delete =mysqli_query($con,$delete_patient);
    
    if($run_delete){
        echo "<script>alert('A Patient have been deleted')</script>";
        echo "<script>window.open('viewCustomer.php','_self')</script>";
    }

}
?>