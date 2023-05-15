
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php



			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'people':

					$query = 'SELECT * FROM people
						WHERE
						people_id ='.$_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						while($row = mysqli_fetch_array($result))
						{   
						$zz= $row['people_id'];
						$i= $row['first_name'];
						$a=$row['last_name'];
						$b=$row['mid_name'];
						$c=$row['address'];
						$d=$row['contact'];
						$e=$row['comment'];

						}

						$query = "INSERT INTO history
										(operation, people_id,first_name, last_name, mid_name, address,contact, comment)
										VALUES ('Deleted','Null','".$i."','".$a."','".$b."','".$c."','$d','".$e."')";
										mysqli_query($db,$query)or die ('Error in updating Database');



					$query = 'DELETE FROM people
							WHERE
							people_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "index.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>