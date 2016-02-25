<!DOCTYPE html>

<html lang="en">

  <head>
  
	<?php include("head.php");?>
	<?php 
		include("data_connect.php");
	?>
	
  </head>
  
  <body>
  <?php include("header.php");?>
  
  <?php 
	$primary = "1";
	$Name = "";
	$Nachname = "";
	
	$sql = "SELECT ID, Name, Nachname FROM artists WHERE ID = 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$Name = "Name: ". $row["Name"];
			$Nachname = "Nachname: ". $row["Nachname"];
		}
	} else {
		echo "0 results";
	}
	
	$conn->close();
  ?>

	<P>
	<?php 
		echo "<h1> $Name </h1>" ;
		echo "<h1> $Nachname</h1>";
	?>
	</p>
  
    <img src="https://media.giphy.com/media/TeBpzQZRaBIC4/giphy.gif"/>
	
    
  </body>
</html>