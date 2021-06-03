
<?php 

$output_html="
<html>
<head>
<style type=\"text/css\">
        

body{
    margin: 0;
    padding: 0;
}


.supperP{
    border: 1px solid black ;
    display: flex;
    flex-direction:row;
}


.parent{
    border: 1px solid black ;
    display: flex;
    flex-direction:column;
}


.supchild{
    margin-top:0vws;
    margin-right:25vw;
    margin-bottom:0vw;
    margin-left:5vw;
}

.child{
    height: 50px;
    padding: 10vw;
    overflow-y: scroll;
}

.textbox{

    max-height: 10vw;
}



.child1{
    color: blue;
    text-decoration-color: 
    flex: 1;
    padding: 5vw;
    border: 5px solid black ;
}

.child2{
    flex-direction: row;
    display: flex;
    background-color: lightblue;
    flex: 1;
    margin: 10vw;
    padding: 5vw;
    border: 5px solid black ;
}

.child3{
    flex-direction: row;
    display: flex;
    background-color: lightblue;
    flex: 1;
    margin: 5vw;
    padding: 5vw;
    border: 5px solid black ;
}

.img {
    max-width: 100%;
    height: auto;
    border-top-right-radius: 5vw;
    border-top-left-radius: 5vw;

    margin-top:0vws;
    margin-right:25vw;
    margin-bottom:0vw;
    margin-left:5vw;
}

.srpite{
    height: 50px;
    width: 50px;
}

.serachbox
{
    min-width:12vw;
    height: 6vw;
    font-size: 5vw;
}


.serachbox2
{
    min-width:12vw;
    height: 6vw;
    font-size: 5vw;
}

.serachbox3
{
    max-width:20vw;
    height: 3vw;
    font-size: 2vw;
}


.button
{
    max-width:20vw;
    height: 5vw;
    font-size: 3vw;
}


.heading
{
    max-width:10vw;
    height: 10vw;
    font-size: 3vw;

}



.spacer{

    min-width:12vw;
    min-height:7vw;
    background-color: #24222a;
}



.ppsidebar{

    visibility: visible;
}

.parret{
    visibility: hidden;
}




@media (max-width: 900px) {
    .supperP{
        border: 1px solid black ;
        display: flex;
        flex-direction:column;
    }

    .ppsidebar{

        visibility: visible;
    }

    .img {
    max-width: 100%;
    height: auto;
    border-top-right-radius: 5vw;
    border-top-left-radius: 5vw;

    margin-top:0vws;
    margin-right:5vw;
    margin-bottom:0vw;
    margin-left:5vw;
    }


    .supchild{
        margin-top:0vws;
        margin-right:5vw;
        margin-bottom:0vw;
        margin-left:5vw;
    }

}









</style>
    </head>
    
    <body>

<div class=\"supperP\" style=\"background-color: #00005f; \" >

    <div class=\"parent\">
    

                    <div style=\"background-color: #99ccff; color: #000000; font-size: 3vw; display: flex;     margin: 0; 
                      margin-top: 0px;
                  position: fixed;
                  width:100%;
                     \">

                            <img src=\"imgs/1.png\" class = \"heading\"  alt=\"alex\">

                            <form action=\"\" >
                                <label for=\"fname\">Search</label>
                                <input class= \"serachbox\" type=\"text\" id=\"fname\" name=\"user_seach\" id=\"user_seach\">           
                                <input class = \"button\" type=\"submit\" value=\"Submit\"  >
                            </form>
                                    </div>

                <div class=\"spacer\">
                </div>";


                ?>