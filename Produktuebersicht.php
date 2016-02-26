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
  
  <form id="AbfrageForm" action="/Produktuebersicht.php" method="post" autocomplete="off"> 
		<label for="ID">Artist ID</label> 
		<input id="ID" name="ID" maxlength="100"> 
		<button type="submit" name="action" value="0">Search</button> 
		 <button form="AbfrageForm" type="reset">Abfrage zurücksetzen</button> 
	</form>
  
  <?php 
	$primary = $_POST['ID'];
	
	//$primary = mysql_real_escape_string($primary);
	
	$sql = "SELECT ID, Name, Nachname, Picture FROM artists WHERE ID = '$primary'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$Name = "Name: ". $row["Name"];
			$Nachname = "Nachname: ". $row["Nachname"];
			$Picture = $row["Picture"];
		}
	} else {
		echo "0 results";
	}
	
	$conn->close();
  ?>

	<P>
	<?php 
		echo "<h3> $Name </h3>" ;
		if ($Nachname == "Nachname: "){
			
		}else{
			echo "<h3> $Nachname</h3>";
		}
	?>
	<img src= "<?php echo $Picture; ?>" style="width:10%; height:10%;">
	</p>
  
    <img src="https://media.giphy.com/media/TeBpzQZRaBIC4/giphy.gif"/>
	<img src="https://media.giphy.com/media/TeBpzQZRaBIC4/giphy.gif"/>
	<img src="https://media.giphy.com/media/TeBpzQZRaBIC4/giphy.gif"/>
	
    
  </body>
</html>