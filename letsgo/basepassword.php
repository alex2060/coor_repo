


<?php

#given to cliant
$sightpassword="westart";
#recived form user
$uname="U1";

$combo=strtolower(  hash('sha256',  "P1".$uname ) ); 
$neopassword=strtolower(  hash('sha256', $combo.$sightpassword)  ) ; 
$weburl="http://alexhaussmann.com/adhaussmann/letsgo/hoster.php";

#goten form weburl
$setion="A1";

#goto

$webname="http://alexhaussmann.com/adhaussmann/letsgo/redirector1.php";
$newlink=$weburl."?user=".$uname."&hash=".$neopassword."&setion=".$setion."&sightpass=".$sightpassword."&trace=&webname=".$webname;



echo $newlink."</br></br> ".$combo."</br></br> ".$neopassword;
?>











