<?php

$uname=			$_GET["user"];
$hash_word=		$_GET["hash"];
$hashcombiner=	$_GET["sightpass"];
$trace=			$_GET["trace"];
$setion=		$_GET["setion"];

$webpath= 		$_GET["webname"];
$tracearray= explode("(...)",$trace);
//http://alexhaussmann.com/adhaussmann/demo_host/hoster.php?webforward=http://alexhaussmann.com/adhaussmann/demo_host/hoster.php%3Euser=weare_a_go!hash=d47960241028f4581ce5f871cb83148089e56f0938564113500ba4e67f718933!setion=d4a1278ad674f1cff62cd21b0ed8f60e311e5a131e814d7c7abaea25be6c668d!sightpass=9cd8227d27ff6584bb4805c6896d8bd666f971870e53d8b1583defd9d20d911a!trace=(...)11833e36ffbed41fcdbca8a69176e671c7d20a64e534453647969d21ac8ae744(...)9cd8227d27ff6584bb4805c6896d8bd666f971870e53d8b1583defd9d20d911a!webname=&exta=&hashword=d47960241028f4581ce5f871cb83148089e56f0938564113500ba4e67f718933&setion=d4a1278ad674f1cff62cd21b0ed8f60e311e5a131e814d7c7abaea25be6c668d&trace=(...)11833e36ffbed41fcdbca8a69176e671c7d20a64e534453647969d21ac8ae744(...)9cd8227d27ff6584bb4805c6896d8bd666f971870e53d8b1583defd9d20d911a&user=weare_a_go&backtrace_url=http://alexhaussmann.com/adhaussmann/demo_host/backtrack.php

# would be repalced with database 



#CREATE TABLE `demo-host_setion_id` 	( `setion_id` TEXT NOT NULL , `user` TEXT NOT NULL,`log_in` TEXT NOT NULL, UNIQUE (`setion_id`(248)) ) ENGINE = MyISAM; 

#CREATE TABLE `demo-host_users` ( `user` TEXT NOT NULL , `hashword` TEXT NOT NULL , `creationtime` TIMESTAMP NOT NULL , UNIQUE (`user`(248))) ENGINE = MyISAM; 



#CREATE TABLE `demo-host_backtrack_Ledger` ( `used` TEXT NOT NULL ,`user` TEXT NOT NULL , `setion_id` TEXT NOT NULL , `trace` MEDIUMTEXT NOT NULL , `hashword` TEXT NOT NULL , UNIQUE (`hashword`(248)) ) ENGINE = MyISAM; 


$homeserver="http://alexhaussmann.com/adhaussmann/demo_host/hoster.php";

$backtrack="http://alexhaussmann.com/adhaussmann/demo_host/backtrack.php";
include("config.php");

$sql = "SELECT * FROM `demo-host_users` WHERE user LIKE '".$uname."' ;";
$result = $conn->query($sql);


$myoutsaver="we good";
if ($result->num_rows==1 ) {
	$myoutsaver="we good2";





	while($row = $result->fetch_assoc() ) {
		$storedpassword=$row["hashword"];

	}

	$output=$storedpassword;





	$sql = "SELECT * FROM `demo-host_setion_id` WHERE user LIKE '".$uname."' AND setion_id LIKE '".$setion."' ;";
	$result = $conn->query($sql);

	$setionpassword="fail ".$sql;
	if ($result->num_rows==1 ) {
		# code...
		while($row = $result->fetch_assoc() ) {
			$setionpassword=$row["log_in"];
		}


	}
	




		$neopassword=$storedpassword;


		
		$out1=$neopassword;
		$output="intal password </br>".$neopassword;

		for ($i = 0; $i < count($tracearray)-1; $i++)  {
	    	$neopassword=strtolower( hash('sha256',  $neopassword.$tracearray[$i]    ) ) ;
	    	$output=$output."</br></br>".$neopassword."</br>added ".$tracearray[$i] ;
	   		$neopassword=strtolower( hash('sha256',  $neopassword.$setionpassword  ) 		)   ;
	    	$output=$output."</br></br>".$neopassword."</br>added loginside ".$setionpassword 	;
		}



		$output=	$output.		"</br>done with chain</br>";


		$neopassword=		strtolower(     hash('sha256',   $neopassword.$tracearray[count($tracearray)-1]  ) 	) 	;

		$output=$output."</br></br>".$neopassword."</br>added loginside ".$tracearray[count($tracearray)-1]	;


		$output=			$output."</br></br>".$neopassword;
		$output=			$output."</br>verify</br>".$hash_word;
		$reout= 			$output;



		$myoutsaver=$hash_word."</br> ".$output." ".$setionpassword." ".$reout;

		if ($neopassword==$hash_word) {

				$neopassword=strtolower( 	hash('sha256', $neopassword.$setionpassword  ) 	) 	;
				$output=$output."</br></br>".$neopassword."</br>added loginside ".$setionpassword	;
				#store vars for backeverification steep

				$bytes = openssl_random_pseudo_bytes(256);
				//making randome name
				$rando = base64_encode($bytes);

				$nameofkey= hash('sha256',$rando );

				$neopassword=strtolower( 	hash('sha256', $neopassword.$nameofkey  ) 	) 	;

				$output=$output."</br></br>".$neopassword."</br>added loginside ".$nameofkey 	;


				$output=$output."</br></br>".$homeserver."?user=".$uname."&hash=".$neopassword."&setion=".$setion."&sightpass=".$nameofkey."&trace=".$trace."(...)".$nameofkey."&webname=";
				$weout=$output;

				$myout=$homeserver."?user=".$uname."&hash=".$neopassword."&setion=".$setion."&sightpass=".$nameofkey."&trace=".$trace."(...)".$nameofkey."&webname=";

				$myoutsaver=$myout;


				$myout = str_replace('&', '!', $myout);

				$myout = str_replace('?', '>', $myout);

				$sql="INSERT INTO `demo-host_backtrack_Ledger` (`used`, `user`, `setion_id`, `trace`, `hashword`) VALUES ('', '".$uname."', '".$setion."', '".$trace."(...)".$nameofkey."', '".$neopassword."');";
				$result = $conn->query($sql);

				$outurl=$webpath."?webforward=".$myout."&exta=".$extra."&hashword=".$neopassword."&setion_id=".$setion."&trace=".$trace."(...)".$nameofkey."&user=".$uname."&backtrace_url=".$backtrack;
				
				$output=$outurl;
				if ($webpath!="") {
					header("Location: ".$output." ");
				}
				


			}
}

?>




</br>
</br>
</br>

<?php echo $myoutsaver; ?>

<? //echo $outurl; ?>

</br>
</br>
</br>
<?php echo $outurl; ?>


