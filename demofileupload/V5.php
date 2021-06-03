<?php

session_start();
include("web_name.php");
$uname=$_SESSION["uname".$sitename];


if( $_SESSION["logedin".$sitename]==""){
    header("Location: log_in.php?");
}
if ($uname=="") {
  $uname="nobody";
}
include("config.php");
include("stiper.php");



$pageid= the_striper( $_GET["pageid"] );
$seach_item= the_striper( $_GET["user_seach"] );
$type= the_striper($_GET["type"]); 
$combo_type="or_i";
$page_number=the_striper( $_GET["page_number"]) ;
if ($page_number<0) {
    $page_number=0;
}
if ($page_number=="") {
    $page_number=0;
}

$prev_page=$page_number-1;
if ($page_number<0) {
    $page_number=0;
}
$next_page=$next_number+1;
if($pageid==""){
$pageid="%%";
}
if($pageid=="all"){
$pageid="%%";
}
if ($seach_item!="%%") {
    $seach_item="%".$seach_item."%";
}



$page_numberbot=6*$page_number;
$page_numbertop=6*$page_number+6;




if ("%%"==$seach_item) {
    $sql ="SELECT * FROM `demo_post_page` WHERE `fild_id` LIKE '".$pageid."' ORDER BY `created`  DESC LIMIT 1;";
    $sqlouter=$sql;
}
else{

    $sql="SELECT * FROM `demo_post_page` WHERE `sorce` 
    LIKE '".$pageid."' 
    AND ( 
    `user` LIKE '".$seach_item."' or 
    `boady` LIKE '".$seach_item."' or 
    `header` LIKE '".$seach_item."' ) ORDER BY `created`  DESC  
     LIMIT 1;";

}

$page_numberbot=$page_numberbot+1;
$page_numbertop=$page_numbertop+1;


$result = $conn->query($sql);
$heading_div="nodiv";
$input_type="Vpage";

if ($result->num_rows>0) {
    $count=0;
    while($row = $result->fetch_assoc() and $count==0) {
            $header=$row["header"];
            $boady=$row["boady"];
            $type=$row["type"];
            $linked=$row["linked"];
            $downvote=$row["downvote"];
            $tital=$row["tital"];
            $views=$row["views"];
            $views_this_mouth=$row["views_this_mouth"];
            $buypage=$row["buypage"];
            $poster=$row["user"];
            $sorce_H=$row["sorce"];
            $diplayed_page=$row["fild_id"];
            $count+=1;           
        }



        $sorce_HH=$sorce_H;
        if ($sorce_H=="%%") {
            $sorce_H="the main page";
        }
        include("style/V5headingdiv.php");





}






$result = $conn->query($sql_view);
$result = $conn->query($sql_view_M);




$page_numberbot=6*$page_number;
$page_numbertop=6*$page_number+6;





$sql2="SELECT * FROM `demo_post_page` WHERE `sorce` 
    LIKE '".$pageid."' 
    AND ( 
    `user` LIKE '".$seach_item."' or 
    `boady` LIKE '".$seach_item."' or 
    `header` LIKE '".$seach_item."' ) ORDER BY `created`  DESC  
LIMIT ".$page_numberbot." ,".$page_numbertop.";";


 $sqlouter=$sql2;

$array = array();

$result = $conn->query($sql2);


// make body 
if ($result->num_rows>0) {

    while($row = $result->fetch_assoc()) {


    $C_user =$row["user"];
    $C_tital=$row["tital"];
    $content="<img class=\"img-fluid\" src=\"imgs/".$row["fild_id"]."\">";
    $C_header=$row["header"];

    $button="<button style=\"float: right;\" onclick=
    \"window.location.href= 'V3.php?pageid=".$row["fild_id"]." ' ;\"  >go to page</button>";
    $content="<img src=\"".$row["linked"]."\" style=\"width: 180px; height:110px; \">";

    
        
        
        include("style/outputdiv.php");
        
        if ($diplayed_page==$row["fild_id"]){

            $outputdivs="";
        }



    


    array_push($array, $outputdivs);
    }
    

}
$outputdiv=$array;


?>

            <?php 

                include("style/V5top.php");
                echo $output_html;
            ?>
            </br>
            </br>
            </br>
                        </br>
            </br>
                        </br>
            </br>
            <div class="spacer supchild" style="background-color: rgba(0, 0, 0, 0); "></div>ss
                <button class = 
                    "button" 
                    onclick="window.location.href='home.php';">
                    home
                </button>
                        <?php echo $heading_div;?>




                            <?php 
                                $i = 0;
                                while ($i < count($outputdiv) )
                                {
                                    echo $outputdiv[$i];
                                    $i++;
                                }
                            ?>



            <?php 

                include("style/V5bot.php");
                echo $bothtml;
            ?>

                  
            <?php echo $sqlouter; ?> 
