

<?php

	$sorce="";
	include("config.php");
	include("web_name.php");
	include("stiper.php");
	
	$type=the_striper($_GET['type']);
	$output="none".$type;
	$heashword=the_striper($_GET['hashword']);
	$webname=the_striper($_GET['webname']);
	$user=the_striper($_GET['user']);
	$hash_type=the_striper($_GET['hash_type']);
	$postid=the_striper($_GET['postID']);
	$seach_item=the_striper($_GET['seach_item']);
	


	$post_body=$_GET['post_body'];
	$post_tital=$_GET['post_tital'];
	$post_header=$_GET['post_header'];
	$sorce_comment=$_GET['sorce_comment'];
	$user=$_GET['user'];
	$sight=$_GET['sight'];
	$pagename=$_GET['name'];


	$seach=$_GET['seach'];

	$sight_hash=$_GET['sight_hash'];
	


	if($type=="post_comment"){

	$random_id=time();



$sql = "INSERT INTO `demo_post_page` (`fild_id`, `user`, `views`, `views_this_mouth`, `tital`, `type`, `header`, `boady`, `linked`, `sorce`, `upvote`, `downvote`, `buypage`, `price`, `git_data`, `eamil_data`, `created`) 
	VALUES ('".$random_id."', '".$user."', '0', '0', 
	'".$post_tital."', 'coment', '".$post_header."', '".$post_body."', 
	'linked', '".$sorce_comment."', '10', '10', '1', '1', 'git_data', 
	'".$pagename."', CURRENT_TIMESTAMP);";

	$sql="INSERT INTO `demo_post_page` 
   	(`fild_id`, `user`, `tital`,  `type`, `header`, `boady`, `linked`, `sorce`, `created`) VALUES 
   	('".$random_id."_".$uname."'  , 
   	'".$uname."'                  ,
   	'".$post_tital."'             , 
   	'datumes'                     , 
   	'".$post_header."'            , 
   	'".$post_body."'              , 
   	'linked'                   	  , 
   	'".$sorce_comment."'          ,
   	CURRENT_TIMESTAMP); ";


	$result = $conn->query($sql);


  $output=$random_id;




	}





if($type=="posts"){

//postID
//seach_item
//top

	if($pageid==""){
	$pageid="%%";
	}

	if ($seach_item!="%%") {
	    $seach_item="%".$seach_item."%";
	}
	if ($pagename=="") {
		$pagename="%%";
	}




    $sql="
    SELECT * FROM `demo_post_page` WHERE `sorce` 
    LIKE '".$pageid."' AND `sorce` LIKE '".$pagename."'
    AND `type` LIKE '".$pagename."' AND ( 
    `user` LIKE '".$seach_item."' or 
    `boady` LIKE '".$seach_item."' or 
    `header` LIKE '".$seach_item."' )  ORDER BY `created`  DESC  
     LIMIT 100;";


	$result = $conn->query($sql);

	$out="";

	if ($result->num_rows>0) {
	    $count=0;
	    while($row = $result->fetch_assoc() ) {
	            $count+=1;
	            $out=$out.$row["fild_id"]."?";
	        }
		}
		$output=$out." ".$sql;
		



}




	if($type=="login_check"){

		$sql1 = "SELECT * FROM `demo_user_table` WHERE user LIKE '".$user."';";
		$result = $conn->query($sql1);
		if($result->num_rows==1){
			$val=hash('sha256', $pass.$webname);

			while($row = $result->fetch_assoc() and $count==0) {

				$pass=$row["pass"];

				$val=hash('sha256', $pass.$webname);

			}
			if ($val==$heashword) {

					$output="True";


			}
			else{

					$output="False";

			}


		
		}
		else{

			$output="False".$sql1;

		}
	}
	if($type=="post_B"){

		
		$output="intypeB".$postid;
		$sql ="SELECT * FROM `demo_post_page` WHERE `fild_id` LIKE '".$postid."' LIMIT 1;";
		$count=0;
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc() and $count==0) {

			$output=$row["boady"];
			$count+=1;  

		}
	}


	if($type=="post_L"){
		$sql ="SELECT * FROM `demo_post_page` WHERE `fild_id` LIKE '".$postid."' LIMIT 1;";
		$count=0;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc() and $count==0) {

			$output=$webaddress.$row["linked"];
			$count+=1;

		}
	}

	if($type=="post_R"){
		$sql ="SELECT * FROM `demo_post_page` WHERE `fild_id` LIKE '".$postid."' LIMIT 1;";
		$count=0;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc() and $count==0) {

			$output=$webaddress.$row["fild_id"];
			$count+=1;

		}
	}

	if($type=="post_H"){
		$sql ="SELECT * FROM `demo_post_page` WHERE `fild_id` LIKE '".$postid."' LIMIT 1;";
		$count=0;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc() and $count==0) {

			$output=$row["header"];
			$count+=1;
			
		}
	}

	if($type=="post_T"){
		$sql ="SELECT * FROM `demo_post_page` WHERE `fild_id` LIKE '".$postid."' LIMIT 1;";
		$count=0;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc() and $count==0) {

			$output=$row["tital"];
			$count+=1;

		}
	}

	if($type=="post_sorce")
	{
		$sql ="SELECT * FROM `demo_post_page` WHERE `fild_id` LIKE '".$postid."' LIMIT 1;";
		$count=0;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc() and $count==0) {

			$output=$row["sorce"];
			$count+=1;

		}
	}



	if($type=="post_A"){
		$path_to="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$path_to = explode('datumes.php?', $path_to);
		$sql ="SELECT * FROM `demo_post_page` WHERE `fild_id` LIKE '".$postid."' LIMIT 1;";
		$count=0;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc() and $count==0) {

			$output="".$row["tital"]."(?_?)".$row["header"]."(?_?)".$row["boady"]."(?_?)".$path_to[0].$row["linked"]."(?_?)".$row["sorce"]."(?_?)"."www.place_topost.com"."(?_?)".$row["sorce"]."(?_?)".
			$row["user"]."(?_?)".$path_to[0]."V5.php?pageid=".$postid."(?_?)".$path_to[0]."post_page2.php?pageid=".$postid."(?_?)".$path_to[0]."sorceurl"."(?_?)".$postid."(?_?)".$path_to[0];
			$count+=1;

		}
	}



	if($type=="post_2"){
		$sql ="SELECT * FROM `demo_post_page` WHERE `fild_id` LIKE '".$postid."' LIMIT 1;";
		$count=0;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc() and $count==0) {

			$output=$webaddress.$postid;
			$count+=1;
		}
	}



	if ($type=="getid"){
		$count=0;
		$sql ="SELECT * FROM `trade` WHERE `key` LIKE '".$_GET['key']."' LIMIT 1;";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc() and $count==0) {
			$output=$row['password']." ".$row['type'];
			$count+=1;
		}

	}



	echo $output;




?>




















