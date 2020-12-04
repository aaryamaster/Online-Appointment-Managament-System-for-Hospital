<?php if(!isset($_SESSION)){
        session_start();
    }
    $con = mysqli_connect("localhost","root","","projectmms") or die("Connection was not established");
    $p_id=$_GET['p_id'];  
    $get_user = "select * from patient where p_id = $p_id";
					// echo "<script>alert('$get_id');</script>";
					$run_user = mysqli_query($con, $get_user);
                    $row = mysqli_fetch_array($run_user);
                    $name = $row['name'];
                    $age = $row['age'];
                    $contact = $row['contact'];
                    $address = $row['address'];
                    $bgroup = $row['bgroup'];
                    $email = $row['email'];
                    $password = $row['password'];
                    

			       
?>
<?php include('header.php'); ?>





	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Patient Update</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
		<form enctype="multipart/form-data" method="post" class="text-center">
			 <div class="col-md-12">
				  
			 		<label>
						Your Name: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>

					<label>
						Age: <input type="number" name="age" value="<?php echo $age; ?>" placeholder="age" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br><br>
					<label>
						Mobile: <input type="number" name="contact" value="<?php echo $contact; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>" placeholder="address">
					</label><br><br>
					<label>
						Blood Group: <select name="bgroup">
										<option value=""><?php echo $bgroup; ?></option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
									</select>
					</label><br><br>
					<label>
						Email: <input type="email" name="email"  value="<?php echo $email; ?>" placeholder="email" required>
					</label><br><br>
					<label>
						Password: <input type="password" name="password"  value="<?php echo $password; ?>" placeholder="password" required>
					</label><br><br>
					
					
					<button name="update" type="submit" style="margin-left:60px;width: 85px;border-radius: 3px;">Update</button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	



	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	 <!-- validation and insertion -->


				<?php
					// 	include('config.php');
					// 	if(isset($_POST['submit'])){

					// 	$sql1 = "SELECT * FROM patient WHERE email='".$_POST["email"]."' ";
             		//     $result = $conn->query($sql1);	
             		//     if ($result->num_rows > 0) {
			        //           echo "<script>alert('Sorry, user already exist!');</script>";
			        //      }
					// 	else{
					// 		$sql = "INSERT INTO patient (name,age,contact,address,bgroup,email, password)
					// 		VALUES ('" . $_POST["name"] ."','" . $_POST["age"] . "','" . $_POST["contact"] . "','" . $_POST["address"] . "','" . $_POST["bgroup"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "' )";

					// 		if ($conn->query($sql) === TRUE) {
					// 		    echo "<script>location.replace('patient_success_msg.php');</script>";
					// 		} else {
					// 		    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
					// 		}

					// 		$conn->close();
					// 	}
                    // }
                    if(isset($_POST['update'])){
                        $name = htmlentities($_POST['name']);
                        $age = htmlentities($_POST['age']);
                        $contact = htmlentities($_POST['contact']);
                        $address = htmlentities($_POST['address']);
                        $bgroup = htmlentities($_POST['bgroup']);
                        $email = htmlentities($_POST['email']);
                        $password = htmlentities($_POST['password']);
                       
                        $update = "update patient set name='$name', age='$age', contact='$contact', address='$address',
                bgroup='$bgroup', email='$email', password='$password'
                where p_id='$p_id'";
    
                $run = mysqli_query($con, $update);
                        if($run){
                            echo"<script>alert('Patient Details updated')</script>";
                            echo"<script>window.open('viewCustomer.php'
                            ,'_self')</script>";
    
                        }
    }
				?> 



	<!-- validation and insertion End-->



</body>
</html>