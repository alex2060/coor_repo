<?php
$uname=			$_GET["user"];
$hash_word=		$_GET["hashword"];
$webname= 		$_GET["webname"];
$retrundata=	$_GET["data"];

$tracearray= explode("(...)",$trace);
# would be repalced with database 
$user="U1";
$password="P1";
# in practice this is what is stored


$homeserver="http://alexhaussmann.com/adhaussmann/letsgo/hoster.php";
$storedpassword = strtolower( hash('sha256',   $password.$user  ) )   ;
$reout=$storedpassword."</br></br>";
$setionid="A1";
$setionpassword="B2";
$sectionipaddress;
$sightpassword="sightpassword5";


$neopassword=$storedpassword;

$reout=$neopassword."</br></br>";
$outword=strtolower(    hash('sha256',   $neopassword ) ) ;
$reout=$reout.$outword."</br></br>";
$outword=strtolower(    hash('sha256',   $outword.$setionpassword  ) ) ;
$reout=$reout.$outword."</br></br>";
$outword=strtolower(    hash('sha256',   $outword.$webname  ) ) ;
$reout=$reout.$outword."</br></br>";
$outword=strtolower(    hash('sha256',   $outword.$setionpassword  ) ) ;
$reout=$reout.$outword."</br></br>";
$outword=strtolower(    hash('sha256',   $outword.$sightpassword  ) ) ;
$reout=$reout.$outword."</br></br>";


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
		$out=$homeserver."?user=".$uname."&hash=".$finalout."&setion=".$setionid."&sightpass=".$sightpassword."&trace=".$trace."(...)".$webname."&webname=";
	}
}
else{
	$out="False";
}

//http://alexhaussmann.com/adhaussmann/letsgo/login_start.php?webname=alex_websight&type=login_check&user=U1&hashword=fed0b991f5fb96ec87ab5e35ac41afcd16d91e9f5905c85ec121958f50696583
?>

<?php echo $out;?>

