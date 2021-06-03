<?php


session_start();
include("web_name.php");
if( $_SESSION["logedin".$sitename]==""){
    header("Location: log_in.php?");
}

$uname=$_SESSION["uname".$sitename];
if ($uname=="") {
  $uname="nobody";
}
include("config.php");
include("stiper.php");




$tital=the_striper($_POST["tital"]) ;
$header=the_striper( $_POST["header"]) ;
$boady=the_striper( $_POST["boady"] );
$link=the_striper( $_POST["link"] );
$comtype=the_striper( $_POST["dropdown"] ) ;
$linkdisc=the_striper( $_POST["linkdisc"] );
$sorce=the_striper( $_POST["sorce"] );
$buy=the_striper( $_POST["buy"] );
$price=the_striper( $_POST["price"] );

$eamil_data=the_striper( $_POST["mypagename"]) ;
$type= the_striper( $_POST["type"]  );
$bord_I=the_striper( $_POST["bord"] );

$herewego="nothing";

$random_id=$uname1.time();

$buysend="0";
$price_send="5.00";

$output=$tital." heres ".$comtype;




$sql="";

$herewego="notgood";


$herewego="inlink";
if(isset($_FILES['image'])){
    $herewego="infile";
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    $extensions= array("jpeg","jpg","png","gif","mp4");    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    if($file_size > 20971520) {
       $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true) {
     $output="".$uname.time()."_2";
     move_uploaded_file($file_tmp,"".$random_id); 
     $fileMoved = rename($random_id,  "imgs/".$random_id )  ;
     $str_output = shell_exec($command_exec);
     $link="imgs/".$random_id;
     $herewego="ture";
     $fileMoved=$fileMoved." we in here ";

     //echo "upload errr ".$uploaded." sdfa".$_FILES['image']['name'].
//       " size".$_FILES['image']['size']." sdfas".$_FILES['image']['error']." dsfas".$file_tmp."sada".$fileMoved."out"; 
    }else{
     //echo "jerewego".var_dump($errors);
    }
}





if ($comtype=="Yes") {
//dose the datums stuff
  $output="ture";
  $seachid=$boady;
  $websight= $header;

  $ch1 = curl_init();
  curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch1, CURLOPT_URL,    str_replace(' ', '', $websight."?type=post_B&postID=".$seachid)   );
  $boady       =  curl_exec($ch1);
  curl_close($ch1);

  $ch3 = curl_init();
  curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch3, CURLOPT_URL,    str_replace(' ', '', $websight."?type=post_H&postID=".$seachid)   );
  $header    =  curl_exec($ch3);
  curl_close($ch3);

  $ch5 = curl_init();
  curl_setopt($ch5, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch5, CURLOPT_URL,  str_replace(' ', '', $websight."?type=post_L&postID=".$seachid)   );
  $link    =  curl_exec($ch5);
  curl_close($ch5);



  $output=$output."?".$boady."?".$git_data."?".$header."?".$tital."      ".$websight."?type=post_T&postID=.  ".$seachid.$link ;


}




//CREATE TABLE `demo_post_page` ( `fild_id` TEXT NOT NULL , `user` TEXT NOT NULL , `tital` TEXT NOT NULL , `type` TEXT NOT NULL , `header` TEXT NOT NULL , `boady` TEXT NOT NULL , `linked` TEXT NOT NULL , `sorce` TEXT NOT NULL , `created` TIMESTAMP NOT NULL, UNIQUE (`fild_id`(248))  ) ENGINE = MyISAM; 

$here="1";
if ($tital!=""){


  $here="done";
  $sql="INSERT INTO `demo_post_page` 
   (`fild_id`, `user`, `tital`,  `type`, `header`, `boady`, `linked`, `sorce`, `created`) VALUES 
   ('".$random_id."_".$uname."'  , 
   '".$uname."'                  ,
   '".$tital."'                  , 
   '".$type."'                   , 
   '".$header."'                 , 
   '".$boady."'                  , 
   '".$link."'                   , 
   '".$sorce."'                  ,
   CURRENT_TIMESTAMP); ";
  
  $result = $conn->query($sql);
  //echo "hire".$result." ".$sql; 
  header("Location: V5.php?pageid=".$random_id."_".$uname."");

}



?>














<!DOCTYPE html>
<html>
<head>
  <title>first</title>

<style>

.boady{

  width: 12vw;
  height: 6vw;
  font-size: 5vw;

}

.parent{

    display: flex;
    flex-direction:column;

}


.child1{

    color: blue;
    text-decoration-color: 
    flex: 1;
    margin: 4vw;
    padding: 5vw;
     border: 5px solid black;

}

.button{
  min-width:12vw;
  height: 5vw;
  font-size: 4vw;
}


.button2{
  min-width:15vw;
  height: 5vw;
  font-size: 3vw;
}
</style>

<body style="">
  <div class="parent" style="background-color: #24222a;">


    <div class="child child1" style="background-color: #000000; color: #ffffffff; font-size:6vw; flex: 1; display: flex;">
    <form action = "" method = "POST" enctype = "multipart/form-data">


            <label for="login">page name</label><br>
            <input type="tital" id="mypagename" name="mypagename" class="button" value=""><br>
        

            <label for="login">tital</label><br>
            <input type="tital" id="tital" name="tital" class="button" value=""><br>
            <label for="login">Header/webpage</label><br>

            <input type="header" id="header" name="header" class="button" value=""><br>
            <label for="login">Bodys/ID</label><br>
 

            <input type="boady" id="boady" name="boady" class="button" value=""><br>
            <label for="login">Source</label><br>

            <input type="linked" id="sorce" name="sorce" class="button" value= "1613423276 " > <br>
            Link
            <input type="checkbox"  style="height: 5vw; min-width:5vw;" name="dropdown" value="Yes" /><br>
            <input type = "file" name = "image" class="button" />
            </br>
            <input type="submit" class="button2" value="Enter">
            </select>
    </form>



  </div>
</div>
    
</body>
</html>
here we go </br>
<?php echo $fileMoved." outputing " ; ?>
                  


