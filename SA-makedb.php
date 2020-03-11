<?php
include 'dbconnection.php';
//read in file
$file = fopen("df_diseases.txt", "r");// or die ("Unable to open");
//initialize array
$parts = array();
//read in column headers
$header = fgets($file);

//SQL statement to make table
$sqlheader = "CREATE TABLE `scottpa_db`.`diseases` ( 
`id` INT AUTO_INCREMENT , 
`name` VARCHAR(255) NOT NULL , 
`link` VARCHAR(255) , 
`symptoms` VARCHAR(1000) , 
`causes` VARCHAR(1000) , 
`risk_factor` VARCHAR(1000) ,
`overview` VARCHAR(1000) , 
`treatment` VARCHAR(1000) , 
`medication` VARCHAR(1000) , 
`home_remedies` VARCHAR(1000) ,  
PRIMARY KEY (`id`)) ENGINE = InnoDB;";

//make TABLE
mysqli_query($conn, $sqlheader);


while(! feof($file)) {
	$parts = explode("\t", fgets($file));
  		//make Insert statement
  		$name = substr(preg_replace("/[^A-Za-z0-9 ]/", '', $parts[1]), 0, 999);
  		$link = substr(preg_replace("/[^A-Za-z0-9 ]/", '', $parts[2]), 0, 999);
  		$symptoms = substr(preg_replace("/[^A-Za-z0-9 ]/", '', $parts[3]), 0, 999);
  		$causes = substr(preg_replace("/[^A-Za-z0-9 ]/", '', $parts[4]), 0, 999);
  		$risk_factor = substr(preg_replace("/[^A-Za-z0-9 ]/", '', $parts[5]), 0, 999);
  		$overview = substr(preg_replace("/[^A-Za-z0-9 ]/", '', $parts[6]), 0, 999);
  		$treatment = substr(preg_replace("/[^A-Za-z0-9 ]/", '', $parts[7]), 0, 999);
  		$medication = substr(preg_replace("/[^A-Za-z0-9 ]/", '', $parts[8]), 0, 999);
  		$home_remedies = substr(preg_replace("/[^A-Za-z0-9 ]/", '', $parts[9]), 0, 999);
  		echo $risk_factor;
  		$sqlIn = "Insert into diseases (name, link, symptoms, causes, risk_factor, overview, treatment, medication, home_remedies) 
  		values ('".$name."','".$link."','".$symptoms."','".$causes."','".$risk_factor."','".$overview."','".$treatment."','".$medication."','".$home_remedies."')"; 
  		if (mysqli_query($conn, $sqlIn)) {
 			echo "New record created successfully <br>";
 			}
 		else {
  			echo "No Results<br>";
  			echo $sqlIn;
  		}
	}
fclose($file);

?>
