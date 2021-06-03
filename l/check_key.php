<?php




session_start();

include("config.php");
include("web_name.php");



$name=$_GET["name"];

$output="false";



$sql = "SELECT * FROM `this_is_it` WHERE `name` LIKE '".$name."';";

$result = $conn->query($sql);
$out="";
if ($result->num_rows>0) {

    while($row = $result->fetch_assoc() ) {
            $count+=1;
            $mykey=$row["hash"];
            $myitem=$row["email"];
            $time_V=$row["time_I"];
            $keys_V=$row["key_of_H"];
        }

}





echo "hash ". $mykey." email ".$myitem." time ".$time_V." ".$keys_V;

?>
