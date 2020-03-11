<?php
echo	'<a href="./SA-search.php">Back to Search For Diseases</a> ';


include 'dbconnection.php';

$name = $_GET['name'];
echo '<h1>'.$name.'</h1>';
echo "<h3><a href='./SA-download.php?name=".$name."'>Download Details ".$name."</a></h2>";
	$sql3 = "select * from diseases where `name` ='".$name."'";
	$result = mysqli_query($conn, $sql3);
	$row = mysqli_fetch_assoc($result);
	echo "<h2>Overview</h2>"; 
	echo "<p>".$row['overview']."</p>";
	echo "<h2>Symptoms</h2>"; 
	echo "<p>".$row['symptoms']."</p>";
	echo "<h2>Causes</h2>"; 
	echo "<p>".$row['causes']."</p>";
	echo "<h2>Home Remedies</h2>"; 
	echo "<p>".$row['home_remedies']."</p>";
	echo "<h2>Medicaton</h2>"; 
	echo "<p>".$row['medication']."</p>";
	echo "<p>To get more information click <a href='".$row['link']."'>here</a></p>";
	/*
	echo '<input type = "hidden" name = "TicketId" value = "'.$ID.'">';
	echo 'Name:<br><input type="text" name="Name" value="'.$row['Name'].'"><br>';
	echo 'Email:<br><input type="text" name="Email"value="'.$row['Email'].'"><br>';
	echo 'Please enter the reason for your ticket:<br><textarea name="Reason" rows="15" cols="100">'.$row['Reason'].'</textarea>'; 
	echo '<br><br><input type="submit" name="submit">';*/


mysqli_close($conn);

?>