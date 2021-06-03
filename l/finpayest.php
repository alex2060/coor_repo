<?php


session_start();


//http://alexhaussmann.com/adhaussmann/ledure/finpayest.php



$bytes = openssl_random_pseudo_bytes(32);
//making hash s
$hash = hash('sha256', base64_encode($bytes) );
$hash=strtolower($hash);

$storedkey=hash('sha256', $hash  );



$bytes = openssl_random_pseudo_bytes(256);


//making randome name
$rando = base64_encode($bytes);
$nameofkey= hash('sha256',$rando );
//http://alexhaussmann.com/adhaussmann/alex/dat2/rem_key.php?key=64f763476e164695378d91481c8f389e0b453887b4192b2f8dc82ec59efa2cf9&name=48caed2a963210de158490cf17bfe928ca0df5afaf9bc2f794bcdb880f449fd1


$ledureurl="http://alexhaussmann.com/adhaussmann/l/";
$rmurl = $ledureurl."rem_key.php?key=".$hash."&name=".$nameofkey;



$emailcont="remove link ".$rmurl." next check link ".$checkurl;




if ($_GET["hash"]!="") {


    $gourl = $ledureurl."add_key.php?hash=".$_GET["hash"]."&name=".$_GET["name"]."&emailaddress=".$_GET["emailaddress"]."&Sight_Pass=addpass";

    $sendurl = $ledureurl."output.php?key=".$_GET["key"]."&name=".$_GET["name"]."&emailaddress=".$_GET["emailaddress"];

    mail("alex.haussmann@gmail.com" , "product for redeam code 22",$sendurl );

    mail( $_GET["emailaddress"]     , "product for redeam code 223",$sendurl );


    header("Location: ".$gourl);

}



?>







<!DOCTYPE html>
<html>
  <head>


    <!-- (A) LOAD QRCODEJS LIBRARY -->
    <!-- https://cdnjs.com/libraries/qrcodejs -->

    <!-- https://github.com/davidshimjs/qrcodejs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
  

  </head>
  <body>
    <!-- (B) QR CODE HERE -->




<form action = "" enctype = "multipart/form-data">


      <label for="login">hash</label><br>
      <input type="boady" id="boady" name="hash" class="button" value= <?php echo "\"".$storedkey."\"";?> >

      <br>

      <label for="login">name </label><br>
      <input type="linked" id="sorce" name="name" class="button" value=<?php echo "\"".$nameofkey."\"";?> >
      <br>


      <label for="login">email</label><br>
      <input type="linked" id="sorce" name="emailaddress" class="button" value=<?php echo "\"".$_GET["email"]."\"";?> >
      <br>


      <label for="login">removal code</label><br>
      <input type="linked" id="sorce" name="key" class="button" value=<?php echo "\"".$hash."\"";?> >
      <br>




      <input type="submit" class="button2" value="Enter">

</form>

