<?php




session_start();

include("config.php");
include("web_name.php");



$name=$_GET["name"];
$check_key=hash('sha256', $_GET["key"]   );

$output="false";

#CREATE TABLE `the_example_ledger` ( `name` TEXT NOT NULL , `hash` TEXT NOT NULL , `time_E` TIMESTAMP NOT NULL , `time_I` TIMESTAMP NOT NULL , `key_of_H` TEXT NOT NULL , `sorce` TEXT NOT NULL , `email` TEXT NOT NULL ) ENGINE = MyISAM; 

#CREATE TABLE `treelose_data`.`the_example_ledger` ( `name` TEXT NOT NULL , `hash` TEXT NOT NULL , `time_E` TIMESTAMP NOT NULL , `time_I` TIMESTAMP NOT NULL , `key_of_H` TEXT NOT NULL , `sorce` TEXT NOT NULL , `email` TEXT NOT NULL , UNIQUE (`name`(1000))) ENGINE = MyISAM; 


$sql = "SELECT * FROM `the_example_ledger` WHERE `name` LIKE '".$name."' ORDER BY `hash` DESC";

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
	    	$sql="UPDATE `the_example_ledger` SET `key_of_H` = '".$_GET["key"]."' WHERE `name` = '".$name."';";
            $result = $conn->query($sql);
            $sql="UPDATE `the_example_ledger` SET `time_E` = 'CURRENT_TIMESTAMP' WHERE `name` = '".$name."';";
	    	$result = $conn->query($sql);

    	}
    	else{
    	   $out="key on file ".$file_key;
    	}
    }
    else{
        $out="wrongkey";
    }
}


echo $out;

?>
