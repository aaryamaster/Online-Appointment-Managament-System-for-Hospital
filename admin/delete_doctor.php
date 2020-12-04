<?php
$con = mysqli_connect("localhost","root","","projectmms") or die("Connection was not established");

if(isset($_GET['doc_id'])){
    $doc_id = $_GET['doc_id'];

    $delete_doc = "delete from doctor where doc_id='$doc_id'";

    $run_delete =mysqli_query($con,$delete_doc);
    
    if($run_delete){
        echo "<script>alert('A doctor have been deleted')</script>";
        echo "<script>window.open('viewDoctor.php','_self')</script>";
    }

}
?>