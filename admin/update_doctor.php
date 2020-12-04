<?php if(!isset($_SESSION)){
        session_start();
    }
    $con = mysqli_connect("localhost","root","","projectmms") or die("Connection was not established");
    $doc_id=$_GET['doc_id'];  
    $get_user = "select * from doctor where doc_id = $doc_id";
					// echo "<script>alert('$get_id');</script>";
					$run_user = mysqli_query($con, $get_user);
                    $row = mysqli_fetch_array($run_user);
                    $name = $row['name'];
                    $address = $row['address'];
                    $contact = $row['contact'];
                    $email = $row['email'];
                    $expertise = $row['expertise'];
                    $userid = $row['userid'];
                    $fee = $row['fee'];
                    $password = $row['password'];
                    

			       
?>

<?php include('header.php'); ?>




	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Update Doctor</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" action=""  method="post" class="text-center" style="margin-left: 110px">
			 <div class="col-md-12">
				  	
			 		
					<label>
					    <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" autocomplete="on">
					</label><br><br>
					<label>
						 <input type="text" name="address" value="<?php echo $address; ?>" placeholder="address" >
					</label><br><br>
					<label>
						 <input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="contact" >
					</label><br><br>

					<label>
						 <input type="email" name="email"  value="<?php echo $email; ?>" placeholder="email" >
					</label><br><br>
					
					<label>
						 <select name="expertise" >
                
										<option><?php echo $expertise; ?></option>
										<option>Medicine</option>
										<option>Heart</option>
										<option>Bone</option>
										<option>Kidney</option>
										<option>Cardiologist</option>
										<option>Plastic Surgeon</option>
										<option>General Physician</option>
										<option>Neurologist</option>
										<option>Liver</option>
										<option>Obstetrics</option>
										<option>Gynecologist</option>
										<option>Neuro-Surgeon</option>
										<option>Onconogist</option>
										</select>
					</label><br><br>
					<label>
					     <input type="text" name="userid" value="<?php echo $userid; ?>" placeholder="userid" >
					</label><br><br>
					<label>
					   <input type="text" name="fee" value="<?php echo $fee; ?>" placeholder="Fee" >
					</label><br><br>
					<label>
					   <input type="password" name="password" value="<?php echo $password; ?>" placeholder="password" >
					</label><br><br>
					<label>
						 
					</label><br><br>
					
					<button name="update" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Update</button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	

					<!-- inserting data -->
					<?php  
				// 		 if(isset($_POST['submit'])){
				// 			$target_dir = "../photo/";
				// 			$target_file = $target_dir . basename($_FILES["pic"]["name"]);
				// 			$uploadOk = 1;
				// 			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// 			// Check if image file is a actual image or fake image

				// 		    $check = getimagesize($_FILES["pic"]["tmp_name"]);
				// 		    if($check !== false) {
				// 		        // echo "File is an image - " . $check["mime"] . ".";
				// 		        $uploadOk = 1;
				// 		    } else {
				// 		        echo "File is not an image.";
				// 		        $uploadOk = 0;
				// 		    }

				// 			// Check if file already exists
				// 			if (file_exists($target_file)) {
				// 			    echo "<script>alert('Sorry, file already exists.');</script>";
				// 			    $uploadOk = 0;
				// 			}
				// 			//aloow certain file formats
				// 			if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
				// 				echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
				// 				$uploadok=0;
				// 			}	
				// 		else{
				// 			if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
				// 					include('../config.php');
				// 					$sql1 = "SELECT * FROM doctor WHERE userid='".$_POST["userid"]."' OR email= '" . $_POST["email"] . "' ";
	            //   					$result = $conn->query($sql1);
	            //   					if($result->num_rows > 0){
	            //   						 echo "<script>alert('Sorry, Userid or E-mail already exist!');</script>";
	            //   					}
	            //   					else{
				// 					$sql = "INSERT INTO doctor (name,address,contact,email,expertise,userid,fee,password,pic)
				// 						VALUES ('" . $_POST["name"] . "','" . $_POST["address"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "', '" . $_POST["expertise"] . "','" . $_POST["userid"] . "','" . $_POST["fee"] . "','" . $_POST["password"] . "','" . basename($_FILES["pic"]["name"]) ."' )";

				// 						if ($conn->query($sql) === TRUE) {
				// 						    echo "<script>alert('New Doctor Has been Added Successfully!');</script>";
				// 						} else {
				// 						    echo "<script>alert('There was an Error')<script>";
				// 						}
				// 					}

				// 					$conn->close();
				// 			} else {
				// 				echo "<script>alert('sorry there was an error!');</script>";
				// 			}
							
							
				// 		}
                // }
                if(isset($_POST['update'])){
                    $name = htmlentities($_POST['name']);
                    $address = htmlentities($_POST['address']);
                    $contact = htmlentities($_POST['contact']);
                    $email = htmlentities($_POST['email']);
                    $expertise = htmlentities($_POST['expertise']);
                    $userid = htmlentities($_POST['userid']);
                    $fee = htmlentities($_POST['fee']);
                    $password = htmlentities($_POST['password']);
                   
                    $update = "update doctor set name='$name', address='$address', contact='$contact', email='$email',
            expertise='$expertise', userid='$userid', fee='$fee', password='$password'
            where doc_id='$doc_id'";

            $run = mysqli_query($con, $update);
                    if($run){
                        echo"<script>alert('Doctor Details updated')</script>";
                        echo"<script>window.open('viewDoctor.php'
                        ,'_self')</script>";

                    }
}
				?>
					<!-- inserting data -->

	



	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	



</body>
</html>