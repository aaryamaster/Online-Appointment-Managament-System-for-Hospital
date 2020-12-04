<?php
$con = mysqli_connect("localhost","root","","projectmms") or die("Connection was not established");

if(isset($_GET['booking_id'])){
    $booking_id = $_GET['booking_id'];

    $delete_booking = "delete from booking where booking_id='$booking_id'";

    $run_delete =mysqli_query($con,$delete_booking);
    
    if($run_delete){
        echo "<script>alert('Booking has been Cancelled')</script>";
        echo "<script>window.open('view_booking.php','_self')</script>";
    }

}
?>