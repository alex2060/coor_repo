

<?php 
session_start();

include("web_name.php");


$uname=$_SESSION["uname".$sitename];


if( $_SESSION["logedin".$sitename]==""){
    header("Location: log_in.php?");
}


?>

<html>
<head>
    <style type="text/css">
        


body{
    margin: 0;
    padding: 0
}

.househead{


}


.parent{
    border: 1px solid black ;
    display: flex;
    flex-direction:column;
}

.child{
    height: 50px;
    padding: 10px
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
    width: auto; /* ie8 */
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
    </style>
    </head>
    <body>
    <div class="parent">
<div class="spacer">
</div>
<div class="spacer">
</div>
     <div class="spacer">
        </div>
        <div class="spacer" style="font-size:4vw; color: #ffffffff; background-color: #000020;">
            <br>
                <button class = 
                    "button" 
                    onclick="window.location.href='letts_doit.php';">
                    main
                </button>
                <button class = 
                    "button" 
                    onclick="window.location.href='get_apoint.php';">
                    get_apoint
                </button>
                <button class = 
                    "button" 
                    onclick="window.location.href='logout.php';">
                    log out 
                </button>
                
                <button class = 
                    "button" 
                    onclick="window.location.href='/element-v1.7.20/index.html';">
                    chat
                </button>


 


            <br>
            <br>
        </div>

        <div class="spacer">


        </div>
        
        <div class="spacer">


        </div>


                <div class="spacer">


        </div>


                <div class="spacer">


        </div>



                <div class="spacer">


        </div>


                <div class="spacer">


        </div>

    <div class="spacer">
    </div>


<div class="spacer">
</div>

<div class="spacer">
</div>


<div class="spacer">
</div>

<div class="spacer">
</div>


<div class="spacer">
</div>

<div class="spacer">
</div>

        

        <div class="spacer">


        </div>


                <div class="spacer">


        </div>


                <div class="spacer">


        </div>


                <div class="spacer">


        </div>


                <div class="spacer">


        </div>


                <div class="spacer">


        </div>


                <div class="spacer">


        </div>













    </div>


    </div>




    </div>
        
        

        
    </body>




    
