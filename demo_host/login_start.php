<?php
$uname=			$_GET["user"];
$hash_word=		$_GET["hashword"];
$webname= 		$_GET["webname"];
$retrundata=	$_GET["data"];
$extra=			$_GET["extra"];

$tracearray= explode("(...)",$trace);
# would be repalced with database 

# in practice this is what is stored
include("config.php");


$homeserver="http://alexhaussmann.com/adhaussmann/demo_host/hoster.php";

$sql = "SELECT * FROM `demo-host_users` WHERE user LIKE '".$uname."' ;";
$result = $conn->query($sql);

if ($result->num_rows==1 ) {


	while($row = $result->fetch_assoc() ) {
		$storedpassword=$row["hashword"];

	}


	$bytes = openssl_random_pseudo_bytes(256);
	//making randome name
	$rando = base64_encode($bytes);

	$setionid= hash('sha256',$rando );


	$bytes = openssl_random_pseudo_bytes(256);
	//making randome name
	$rando = base64_encode($bytes);

	$setionpassword= hash('sha256',$rando );


	$sql = "INSERT INTO `demo-host_setion_id` (`setion_id`, `user`, `log_in`) VALUES ('".$setionid."', '".$uname."', '".$setionpassword."') ";

	$result = $conn->query($sql);









	$bytes = openssl_random_pseudo_bytes(256);
	//making randome name
	$rando = base64_encode($bytes);

	$nameofkey= hash('sha256',$rando );



	$sightpassword=$nameofkey;







	$reout=$storedpassword."</br></br>";
	$neopassword=$storedpassword;
	$reout=$neopassword."</br></br>";
	$outword=	strtolower(    hash('sha256',   $neopassword ) ) ;

	$reout=$reout.$outword."</br>added </br></br>";

	$outword=	strtolower(    hash('sha256',   $outword.$setionpassword  ) ) ;

	$reout=$reout.$outword."</br>added ".$setionpassword."</br></br>";
	$outword=	strtolower(    hash('sha256',   $outword.$sightpassword  ) ) ;
	
	$reout=$reout.$outword."</br>added ".$sightpassword ."</br></br>";

	$finalout=$outword;


	$reout=$reout."</br></br>";

	$neopassword=strtolower(    hash('sha256',   $neopassword.$webname  ) ) ;

	if ($neopassword==$hash_word) {
		

		$out="True";

		if ($retrundata=="1") {
			$out=$homeserver.$neopassword."?".$setionid;
			$neopassword=strtolower( 	hash('sha256', $neopassword.$setionpassword  ) ) ;
			$reout=$reout.$neopassword." </br>added ".$setionpassword ."</br>";
			//$output=$homeserver."?user=".$uname."&hash=".$neopassword."&trace=".$trace."(...)".$webpname."&setion=".$setionid."&homeserver=";
			
			$neopassword=strtolower(  hash('sha256',  $hash_word.$sightpassword)  );
			//$reout.
			$out=$homeserver."?user=".$uname."&hash=".$finalout."&setion=".$setionid."&sightpass=".$sightpassword."&trace=".$trace."(...)".$sightpassword."&webname=";
			#$outurl=$webname."?webforward=".$output."&exta=".$extra;
			#$output=$outurl;
		}

	}
	else{
		$out="False";
	}


}
else{
	$reout="web".$sql;
}

//http://alexhaussmann.com/adhaussmann/letsgo/login_start.php?webname=alex_websight&type=login_check&user=U1&hashword=fed0b991f5fb96ec87ab5e35ac41afcd16d91e9f5905c85ec121958f50696583
?>


<?php echo $out?>



