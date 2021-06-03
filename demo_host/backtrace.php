
<?php

$trace=$_GET["trace"];
$user=$_GET["user"];
$hashword=$_GET["hashword"];
$setion_id=$_GET["setion_id"];





		$sql ="SELECT * FROM `demo-host_backtrack_Ledger` WHERE `user` LIKE '".$user."' AND `hashword` LIKE '".$hashword."' AND `setion_id` LIKE '".$setion_id."' AND `trace` LIKE  '".$trace."';";
		$out="False";
		if ($result->num_rows==1)
		{
			$out="True";
		}







?>

<?php echo $out; ?>

aa







