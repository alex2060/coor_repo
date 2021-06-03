<?php




session_start();

include("config.php");
include("web_name.php");



$name=$_GET["name"];
$check_key=hash('sha256', $_GET["key"]   );

$output="false";



$sql = "SELECT * FROM `this_is_it` WHERE `name` LIKE '".$name."' ORDER BY `hash` DESC ";

$out="false";

$result = $conn->query($sql);
if ($result->num_rows>0) {

    while($row = $result->fetch_assoc() ) {
            $mykey=strtolower($row["hash"] );
            $myitem=$row["item"];
            $file_key=$row["key_of_H"];
    }
    if($check_key==$mykey){
    	
    	if ($file_key=="key" ) {
    		$out="true";
	    	$sql="UPDATE `the_example_ledger` SET `key` = '".$_GET["key"]."' WHERE `name` = '".$name."';";
	    	$result = $conn->query($sql);

            $out=md5(rand());
            //$sql="INSERT INTO `this_is_it` (`name`, `hash`, `key`, `item`) VALUES ('".$out."', '".$_GET["Nkey"]."', 'key', 'item');";
            
            $sql="INSERT INTO `the_example_ledger` (`name`, `hash`, `key_of_H`, `email`, `sorce`,`time_I`,`time_E`) VALUES ('".$name."', '".$_GET["Nkey"]."', 'key', 'item','sorce', CURRENT_TIMESTAMP ,'0000-00-00 00:00:00.000000');";
            

            $result = $conn->query($sql);


    	}
    	else{
    	   $out="key on file ".$file_key;
    	}
    }
}


echo $out;

?>
