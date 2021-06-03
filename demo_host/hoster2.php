<?php

$uname=			$_GET["user"];
$hash_word=		$_GET["hash"];
$hashcombiner=	$_GET["sightpass"];
$trace=			$_GET["trace"];
$setion=		$_GET["session"];
$webpath= 		$_GET["webname"];
$tracearray= explode("(...)",$trace);


# would be repalced with database 



#CREATE TABLE `demo-host_setion_id` 	( `setion_id` TEXT NOT NULL , `user` TEXT NOT NULL,`log_in` TEXT NOT NULL, UNIQUE (`setion_id`(248)) ) ENGINE = MyISAM; 

#CREATE TABLE `demo-host_users` ( `user` TEXT NOT NULL , `hashword` TEXT NOT NULL , `creationtime` TIMESTAMP NOT NULL , UNIQUE (`user`(248))) ENGINE = MyISAM; 


#CREATE TABLE `demo-host_backtrack_Ledger` ( `user` TEXT NOT NULL , `setion_id` TEXT NOT NULL , `trace` MEDIUMTEXT NOT NULL , `hashword` TEXT NOT NULL , UNIQUE (`hashword`(248)) ) ENGINE = MyISAM; 







$user="U1";
$password="P1";

# in practice this is what is stored

$homeserver="http://alexhaussmann.com/adhaussmann/letsgo/hoster.php";
$storedpassword = strtolower( hash('sha256',   $password.$user  ) )   ;
$setionid="A1";
$setionpassword="B2";
$sectionipaddress;


$neopassword=$storedpassword;

if ($user==$uname){
	
	$out1=$neopassword;
	$output="intal password </br>".$neopassword;

	if ($trace!="") {
		for ($i = 0; $i < count($tracearray); $i++)  {
	    	$neopassword=strtolower( hash('sha256',  $neopassword.$tracearray[$i]    ) ) ;
	    	$output=$output."</br></br>".$neopassword."</br>added ".$tracearray[$i] ;

	    	$neopassword=strtolower( hash('sha256',  $neopassword.$setionpassword  ) )   ;
	    	$output=$output."</br></br>".$neopassword."</br>added loginside ".$setionpassword ;
		}
	}

	
	
	$output=$output."</br>done with chain</br>".$neopassword;
	$neopassword=strtolower(     hash('sha256',   $neopassword.$hashcombiner  ) ) ;
	$output=$output."</br></br>".$neopassword;

	$output=$output."</br>verify</br>".$hash_word;

	if ($neopassword==$hash_word) {
		$neopassword=strtolower( 	hash('sha256', $neopassword.$setionpassword  ) ) ;
		$output=$output."</br></br>".$neopassword."</br></br>";
		#store vars for backeverification steep
		if ($trace=="") {
			$output=$output.$webpath."?user=".$uname."&hash=".$neopassword."&trace=".$trace."".$hashcombiner."&setion=".$setion."&homeserver=".$homeserver;
		}
		else{

			$output=$output.$webpath."?user=".$uname."&hash=".$neopassword."&trace=".$trace."(...)".$hashcombiner."&setion=".$setion."&homeserver=".$homeserver;
		}
	}
	else{

		$output=$output."</br></br>false ".count($CodeWallTutorialArray);
	}
	/*
	
	*/
}
else{
	$output;
}

#there would also be a check to see if sight passed to can login along with if the ip address was correct for the login party.
echo $output." ".$$hash_word;

?>
sss

