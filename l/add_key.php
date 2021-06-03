<?php




session_start();

include("config.php");




$Sight_Pass=$_GET["Sight_Pass"];
$hash=$_GET["hash"];
$name=$_GET["name"];

$output="false".$Sight_Pass;





if($Sight_Pass=="addpass") {
	$sql="SELECT * FROM `the_example_ledger` WHERE `name` LIKE '".$name."' or `hash` LIKE '".$hash."';";
	
	$output="name or hash taken";
	mail("alex.haussmann@gmail.com","prodcut bough", "prodcut bought by ".$_GET["emailaddress"] );
	$result = $conn->query($sql);

	if ($result->num_rows==0){

		$sql="INSERT INTO `the_example_ledger` (`name`, `hash`, `key_of_H`, `email`, `sorce`,`time_I`,`time_E`) VALUES ('".$name."', '".$hash."', 'key', 'item','sorce', 'CURRENT_TIMESTAMP' ,'0000-00-00 00:00:00.000000');";
		$output="true";
	    $result = $conn->query($sql);
	   	mail("alex.haussmann@gmail.com","prodcut bough", "hash selt" );
	   	mail($_GET["emailaddress"],"My subject", $_GET["emailcontent"] );

	}
	else{
			mail("alex.haussmann@gmail.com","prodcut failed to buy", "hash selt" );
	}
    






}

echo $output;

?>



