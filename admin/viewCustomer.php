<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Patient List</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM patient";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>patient ID</th>
								<th>Patient Name</th>
								
								<th>Age</th>
								<th>Mobile</th>
								<th>Address</th>
								<th>B-Group</th>

								<th>Email </th>
								<th>Action</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
							    $p_id=$row['p_id'];
								echo "<tr>";
								echo "<td>".$row['p_id']."</td>";
								echo "<td>".$row['name']."</td>";
								
								echo "<td>".$row['age']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['bgroup']."</td>";
								
								echo "<td>".$row['email']."</td>";
								echo "<td><button><a href='update_customer.php?p_id=$p_id'style='color:#000;text-decoration:none;'>Update</a></button><a href='delete_customer.php?p_id=$p_id' style='float:right;'><button class='btn btn-danger'>Delete</button></a><br></td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
