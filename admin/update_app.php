<?php if(!isset($_SESSION)){
	session_start();
    }  
    $con = mysqli_connect("localhost","root","","projectmms") or die("Connection was not established");
    $booking_id=$_GET['booking_id'];  
    $get_user = "select * from booking where booking_id = $booking_id";
					// echo "<script>alert('$get_id');</script>";
					$run_user = mysqli_query($con, $get_user);
                    $row = mysqli_fetch_array($run_user);
                    $dname = $row['dname'];
                    $dcontact = $row['dcontact'];
                    $expertise = $row['expertise'];
                    $fee = $row['fee'];
                    $pname = $row['pname'];
                    $pcontact = $row['pcontact'];
                    $email = $row['email'];
                    $address = $row['address'];
                    $date = $row['dates'];
                    $time = $row['tyme'];
                    $payment = $row['payment'];
                    
?>
<?php include('header.php'); ?>


	
<!-- result -->
<?php 
	// $doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
	
 ?>
				<!-- fetching doctor info -->
					<?php 
					// include('../config.php');
					
                    // echo "<script>alert('$doc_id');</script>";
					// 		$sql="SELECT * FROM doctor WHERE doc_id = $doc_id ";

					// 		$result = mysqli_query($con,$sql);
							// if (mysqli_num_rows($result)> 0) {
							    // output data of each row
							//     while($row  = $result->fetch_assoc()) {
							//         $doc_id   = $row["doc_id"];
							//         $name 	= $row["name"];
							//         $expertise 	= $row["expertise"];
							//         $contact 	= $row["contact"];
							//         $fee = $row["fee"];
							// 		 $userid = $row["userid"];
							//     }
							// }
							
							// $conn->close();

					?>
					<!-- fetching doctor info -->

	<!-- 	booking info-->
		<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Update Appoinment</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group" enctype="multipath/form-data">
					

					<label>
						Dr. Name: <input type="text" name="dname" value="<?php echo $dname; ?>" >
					</label><br><br>

 					<label>
						Contact: <input type="text" name="dcontact" value="<?php echo $dcontact; ?>" />
					</label><br><br>
 					
					<label>
						Category: <input type="text" name="expertise" value="<?php echo $expertise; ?>" >
					</label><br><br>

					<label>
						Fee: <input type="text" name="fee" value="<?php echo $fee; ?>" >
					</label><br><br>
					<label>
						Your Name: <input type="text" name="pname" value="<?php echo $pname; ?>">
					</label><br><br>

 					<label>
						 Contact: <input type="text" name="pcontact" value="<?php echo $pcontact; ?>"/>
					</label><br><br>
					<label>
						 E-mail: <input type="email" name="email" value="<?php echo $email; ?>"/>
					</label><br><br>
 					
					<label>
						 Address: <input type="text" name="address" value="<?php echo $address; ?>">
					</label><br><br>
					<label>
						 Date: <input type="date" name="dates" value="<?php echo $date; ?>">
					</label><br><br>
					<label>
						 Time: <select name="tyme">
										<option value=""><?php echo $time; ?></option>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">03.00pm</option>
									</select>
					</label><br><br>
					<label>
						 Payment: <select name="payment">
										<option value=""><?php echo $payment; ?></option>
										<option value="Cash">Cash</option>
										<option value="Online">Online</option>
									</select>
					</label><br><br>
					<label>
						  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label><br><br>
					
					<button name="update" type="submit" style="padding-right:5px;border-radius:3px;margin-right:;">Update</button> 
					<a href="search_doctor.php"><button name="delete" type="submit" style="padding-right:5px;border-radius:3px;margin-right:-150px;">Cancel</button></a> <br>


				</form> <br><br>

			</div>
	
	
		</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					<?php

						// include('../config.php');
						// if(isset($_POST['submit'])){
							

						// $sql = " INSERT INTO booking (dname,userid,dcontact,expertise,fee, pname,pcontact,email,address,dates,tyme,payment)
						// 	VALUES ('" . $_POST["dname"] . "','" . $_POST["userid"] . "','" . $_POST["dcontact"] . "','" . $_POST["expertise"] . "', '" . $_POST["fee"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','". $_POST["tyme"] . "','". $_POST["payment"] . "' )";

						// 	if ($conn->query($sql) === TRUE) {
						// 	    echo "<script>alert('Your booking has been accepted!');</script>";
						// 	} else {
						// 	    echo "<script>alert('There was an Error')<script>";
						// 	}

						// 	$conn->close();
                        // }
                        if(isset($_POST['update'])){
                            $dname = htmlentities($_POST['dname']);
                            $dcontact = htmlentities($_POST['dcontact']);
                            $expertise = htmlentities($_POST['expertise']);
                            $fee = htmlentities($_POST['fee']);
                            $pname = htmlentities($_POST['pname']);
                            $pcontact = htmlentities($_POST['pcontact']);
                            $email = htmlentities($_POST['email']);
                            $date = htmlentities($_POST['dates']);
                            $time = htmlentities($_POST['tyme']);
                            $payment = htmlentities($_POST['payment']);
							$address = htmlentities($_POST['address']);
							
                           
                            $update = "update booking set dname='$dname', dcontact='$dcontact', expertise='$expertise', fee='$fee',
                    pname='$pname', pcontact='$pcontact', email='$email',dates='$date',tyme='$time',payment='$payment',address='$address'
                    where booking_id='$booking_id'";
        
                    $run = mysqli_query($con, $update);
                            if($run){
                                echo"<script>alert('Patient Details updated')</script>";
                                echo"<script>window.open('viewAppoinment.php','_self')</script>";
        
                            }}
					?> 

				<!-- confirming booking -->

	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
