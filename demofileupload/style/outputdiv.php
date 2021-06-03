
<?php

 
$outputdivs=
        "
        <img src=\"".$row["linked"]."\" class =\"img\" alt=\"\"

        style=\"border-top-right-radius: 3vw;border-top-left-radius: 3vw; 
        border-bottom-right-radius: 0vw;border-bottom-left-radius: 0vw;border-bottom: 2px solid #ffffffff;\"

         >


            
        <div class=\"spacer supchild\"  style=\"font-size:5vw; padding: 15px; background-color: #000030; color: #ffffffff;\" > 
            ".$row["user"]."            


        </div>

        <div class=\"child child1 supchild\" style=\"background-color: #000000; color: #ffffffff;    font-size:5vw; flex: 1; display: flex;flex-direction:column;   \">
        "

        .$row["tital"]."</div>
        <div class=\"child child1 supchild\" style=\"background-color: #000010; color: #ffffffff;    font-size:4vw; flex: 1; display: flex;flex-direction:column;   \">"
        .$row["header"].
            "
        </div>
        

        <div class=\"spacer supchild\" style=\"font-size:4vw; color: #ffffffff; \">
                <button class = 
                    \"button\" 
                    onclick=\"window.location.href='V5.php?pageid=".$row["fild_id"]." ';\">
                    go2page
                </button>
                <button class = 
                    \"button\" 
                    onclick=\"window.location.href=' V5.php?pageid=".$row["sorce"]." ';\">
                    sorce
                </button>
                <button class = 
                    \"button\" 
                    onclick=\"window.location.href='post_page2.php?pageid=".$row["fild_id"]." ';\">
                    reply
                </button><br>
        </div>


        <div  class=\"supchild\" 
            style=\"background-color: #000020;  color: #ffffffff; font-size:5vw; padding:30px; padding-top: 4vw;margin-top:0vws;border: 1px solid black ;border-bottom: 2px solid #ffffffff;

            border-bottom-right-radius: 3vw;border-bottom-left-radius: 3vw;border-bottom:\" >
            ".$row["fild_id"]."
        </div> 

        <div class=\"spacer supchild\" style=\"background-color: rgba(0, 0, 0, 0); \"></div>


    <div class=\"spacer supchild\" style=\"background-color: rgba(0, 0, 0, 0); \"></div>


        ";
        
        ?>
