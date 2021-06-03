<?php

session_start();
include("web_name.php");

include("stiper.php");
$uname=the_striper($_SESSION["uname".$sitename]);


if( $_SESSION["logedin".$sitename]==""){
    header("Location: log_in.php?");
}

                        $path_to="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].""; 
                        $path_to = explode('main.php', $path_to);
                        $value= "\"".$path_to[0]."datumes.php".";\"";
                        $valuekk= $path_to[0]."datumes.php";


$pagename=$_GET["name"];

?>


<!DOCTYPE html>
<html>
<head>
    <title>Dynamic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
<style>
body {
    margin: 0;
    padding: 0;
    background: #00003a;
}

.main-container {
    display: flex;
    flex-direction: column;
    word-break: break-all;
}

.content-container {
    max-width: 1400px;
    width: 80%;
    margin: 0 auto;
}

.spacer {
    background-color: #010030;
    color: #000020;
    font-size: 26px;
    text-align: center;
    top: 30px;
    padding: 20px 40px;
    margin: 40px 0;
    font-family: sans-serif;
    text-transform: uppercase;
    -webkit-box-shadow: 1px 1px 2px 1px #ccc;
    -moz-box-shadow: 1px 1px 2px 1px #ccc;
    box-shadow: 1px 1px 2px 1px #ccc;
}

.spacer span {
    color: #000800;
    font-weight: bold;
}

.searchbox {
    border-radius: 10px;
    font-size: 22px;
    padding: 5px 20px;
    border: 0;
    -webkit-box-shadow: 1px 1px 2px 1px #ccc;
    -moz-box-shadow: 1px 1px 2px 1px #ccc;
    box-shadow: 1px 1px 2px 1px #ccc;
    margin-bottom: 40px;
}

.searchbox:focus {
    outline: none;
}

.searchbox::placeholder {
    color: #000800;
}

.searchbox::-webkit-input-placeholder {
    color: #ccc;
}

.searchbox::-moz-placeholder {
    color: #ccc;
}

.searchbox:-ms-input-placeholder {
    color: #ccc;
}

.searchbox:-moz-placeholder {
    color: #ccc;
}

.searchbox-submit-button {
    background: #0005b3;
    border: 0 none;
    font-size: 16px;
    cursor: pointer;
    border-radius: 10px;
    position: relative;
    padding: 9px 20px;
    bottom: 2px;
    right: 20px;
    color: #ffff;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.searchbox-submit-button:hover {
    background: #0067cd;
}

.searchbox-submit-button:focus {
    outline: none;
    border: none;
}

.green-text{
    color: #008000;
    font-weight: bold;
    font-family: sans-serif;
}

.searchbox-container{
    position: relative;
}

.load-more {
    color: #ffffff;
    cursor: pointer;
    border: 0;
    width: 260px;
    height: auto;
    font-size: 32px;
    padding: 8px 0;
    font-family: sans-serif;
    background-color: #001b00;
    margin: 40px 0;
    border-radius: 30px;
}

.load-more:hover {
    background-color: #ffd500;
}

#demo img {
    height: auto;
    width: 100%;
    margin: 20px 0;
}

.button-container {
    margin-top: 40px;
    display: flex;
    justify-content: center;
}

.button-container .button {
    color: #ffffff;
    cursor: pointer;
    border: 0;
    border-radius: 40px;
    width: 200px;
    height: auto;
    font-size: 32px;
    padding: 8px 0;
    font-family: sans-serif;
    margin: 0 10px;
}

.button-container .button:focus {
    outline: none;
}

.button-container .button:nth-of-type(1) {
    background-color: #008000;
}

.button-container .button:nth-of-type(1):hover {
    background-color: #009a00;
}

.button-container .button:nth-of-type(2) {
    background-color: #10ab00;
}

.button-container .button:nth-of-type(2):hover {
    background-color: #ffd500;
}

.button-container .button:nth-of-type(3) {
    background-color: #cc0000;
}

.button-container .button:nth-of-type(3):hover {
    background-color: #ff0000;
}

.child {
    padding: 0 20px;
}

.child div:first-of-type {
    width: 100%;
    position: relative;
    right: 20px;
    padding: 20px;
    background-color: #000030;
}

/*media start*/

@media all and (max-width: 768px) {
    .button-container  {
        flex-wrap: wrap;
    }

    .button-container .button {
        margin: 10px;
    }

    iframe {
        width: 100%;
    }

    .searchbox {
        width: 180px;
    }
}

@media all and (max-width: 500px) {
    .content-container {
        width: 90%;
    }

    .spacer {
        padding: 20px 10px;
    }

    .spacer span {
        display: inline-block;
    }

    .searchbox {
        width: 100px;
        font-size: 16px;
    }

    .searchbox-submit-button {
        font-size: 16px;
        padding: 6px 10px;
        bottom: 0;
    }
}

/*media end*/



</style>
</head>

<body>
    <div class="main-container">
        <section>
            <div class="main-content-container">
                <div class="content-container">
                    <div class="spacer">
                        <div class="green-text" id="backender">hayyy </div>
                        </br>

                        <div id="ayyyon">
                            <div class="searchbox-container">
                                <input type="text" placeholder="Text" class="searchbox" id="seachbox" value="Some text...">
                                <input type="button" class="searchbox-submit-button" value="Capacity Chart" onclick= <?php echo "\"  var seach = document.getElementById('seachbox').value;    document.getElementById('demo').innerHTML=''; layer=0; get_seach('".$valuekk."',seach,'%%',0,parse_and_call,main)\">"; ?>
                                <div>
                                <input type="checkbox" id="namecheck" name="isthename" value="wenameing">
                                <label style="background-color: #000000; color: #ffffffff; flex: 1; " for="vehicle1">seach this page</label><br>


                            </div>
                            </div>
                            <iframe width="560" height="315" src=<?php echo "\"".$_GET["ulr"]."\""; ?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                        </br>
                        <label style="background-color: #000000; color: #ffffffff; flex: 1; " for="vehicle1">s
                            <?
                            
                            echo  $_GET["text"];

                            ?>
                        </label><br>

                            </br>

                            <button class = 
                                    "button" 
                                onclick="window.location.href='home.php';">
                                home
                            </button><br><br>
                        </div>
                    </div>

                    <div class="spacer">
                        <div class="green-text" id="demo">
                            yooo
                        </div>

                          <div id="load more ">
                                <input class="load-more" type="button" value="load more" onclick="loadmore();">
                            </div>
                        </br>
                    </div>

                    <script type="text/javascript">
                        main_url=
                        <?php 
                        $path_to="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].""; 
                        $path_to = explode('main', $path_to);
                        echo "\"".$path_to[0]."datumes.php"."\"";

                        ?>


                        var sightuser=<?php   echo "\"".$uname."\";";        ?>
                        var layer_number=0;
                        var jqery = new Array(2000);

                        for(var i = 0; i < jqery.length; i++){
                            jqery[i]=0;
                        }

                        var adding_stuff=10;

                        function get_post_variable(path,postid,type,memory_loc,func,varible){
                            post_responce(path+'?type='+type+'&postID='+postid,func,varible,memory_loc)
                        }

                        function get_comment(path,post_body,post_tital,post_header,sorce_comment,user,sight_hash,memory_loc,func,varible){
                            post_responce(
                                path+'?type=post_comment&post_body='+post_body+'&post_tital='+post_tital+'&post_header='+post_header+'&sorce_comment='+sorce_comment+'&user='+user+'&sight_hash='+sight_hash,
                                func,varible,memory_loc)

                        }

                        function get_seach(path,seach_item,postID,memory_loc,func,varible){

                            console.log(path+'?type=posts&seach_item='+seach_item+'&postID='+postID);

                            //alert(path+'?type=posts&seach_item='+seach_item+'&postID='+postID)
                            //name

                            cb = document.getElementById('namecheck');
                            //alert("Hello! I am an alert box!!"+cb.checked);
                            valting = path+'?type=posts&seach_item='+seach_item+'&postID='+postID;
                            if (cb.checked) {
                                valting = path+'?type=posts&seach_item='+seach_item+'&postID='+postID+"&name="+<?php echo "\"".$pagename."\""; ?>;
                            };
                            
                            //alert(valting);


                            post_responce(
                                valting,
                                func,varible,memory_loc)

                        }

                        function post_responce(path,func,varible,memory_loc){

                            console.log(path);
                            fetch(path).then(
                                ( response) => {
                                    return response.text();
                                })
                                .then((html) => {
                                    func(html.trim(),varible)
                                });

                        }

                        function parse_and_call(x,b) {
                            console.log(x);
                            //alert(x);
                            jqery[0] = x.split('?');
                            jqery[0].push(-1)

                            main();
                        }

                        function myC(a,b) {
                            //alert("in my c");

                            a=a.split("(?_?)")
                            console.log(a)

                            var add_thing = "";
                            console.log(add_thing)

                            adding_stuff--;
                        }

                        function get_H(a,b){
                            a=a.split("(?_?)")
                            console.log(a)

                            var add_thing = "<img src=\""+a[3]+"\" class =\"img\" alt=\"\" >"+

                                "<div class=\"child child1\" style=\"background-color: #000000; color: #ffffffff; flex: 1; display: flex;flex-direction:column;   \">"+


                                "<div style=\"padding: 20px; background-color: #000030;\" > "
                                +a[7]+

                                "</div>"+"<br>"+a[0]+"<br>"+a[1]+"<br>"+a[2]+
                                "<br><br><div></div></div>"+

                                " <div class=\"spacer button-container\" style=\"color: #ffffffff; margin-bottom: 50px \">      <button class = \"button\"  onclick=\"window.location.href='"+a[8]+" ';\"> sight </button>"+
                                " <button class =  \"button\"  onclick=\"window.location.href='"+a[9]+" ';\"> reply </button><br>"+ " </div><input class='searchbox' type=\"text\" id=\"myText"+b+"\" value=\"Some text...\"> <input class='searchbox-submit-button' type=\"button\" value=\"Capacity Chart\" onclick=\"  var x"+b+" = document.getElementById('myText"+b+"').value; var xxb"+b+" = '"+a[12]+"datumes.php?name="+<?php echo "\"".$pagename."\""; ?>+"&type=post_comment&post_header='+x"+b+"+ '&user="+sightuser+"&sorce_comment="+a[11]+"';     post_responce(xxb"+b+",addpost,'varible',2); \">";

                            document.getElementById("demo").innerHTML+=add_thing;
                            console.log(add_thing)

                            adding_stuff--;
                        }

                        function add_stuff(layer){
                            var i;
                            adding_stuff=10;
                            if (layer!=-1) {
                                for (i = layer; i < layer+10; i++) {
                                    //alert(jqery[0][i]+" " )
                                    if (jqery[0][i+1]==-1) {
                                        layer=-2;
                                        i=layer+11;
                                    }
                                    else{

                                        get_post_variable(main_url,jqery[0][i],"post_A",i+1,get_H,i )
                                    }
                                }

                                layer_number++;
                            }
                        }

                        function main(){
                            console.log("go go main");
                            add_stuff(0);
                        }

                        function addpost(a,b){
                            //alert("addding it babbbbbbbby");
                            //alert(a);

                            get_post_variable(main_url,a,"post_A","i+1",myC,9 )

                        }


                        function loadmore(){
                            add_stuff(layer_number)
                        }

                        function submit() {
                            get_seach(
                                main_url,
                                "","",0,parse_and_call,main)
                            //bar(foo);
                            console.log( "I can display " +  jqery[2] );
                        }

                        submit()
                    </script>
                </div>
            </div>
        </section>
    </div>
</body>
</html>

