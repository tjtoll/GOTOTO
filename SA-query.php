
<?php
echo	'<a href="./SA-search.php">Back to Search For Diseases</a> ';
include 'dbconnection.php';
// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{ 
	
}

$search = '';

if (isset($_POST['query'])){
	$search = $_POST['search'];
	
	$sqlSearch = "select * from (SELECT * FROM `diseases` WHERE `name` like '%".$search."%' UNION SELECT * FROM `diseases` WHERE `symptoms` like '%".$search."%') a";
	$result = mysqli_query($conn, $sqlSearch);
	
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
			echo "<h2><a href='./SA-view.php?name=".$row['name']."'>".$row['name']."</a></h2>";		
			echo "<p>".$row['symptoms']."</p>";
			//echo "<a  href = '".$row['link']"'".$row['link']."'>"	
	    }
	} 
	else {
	    echo "No results";
	}
}

mysqli_close($conn);

?>
