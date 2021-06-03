   <?php     
   $heading_div=
        "
            <div class=\"spacer supchild\"></div>
                    <div class=\"spacer supchild\"  style=\"background-color: #000020; color: #ffffffff; font-size:4vw; flex: 1; display: flex; top:30px; padding-top: 5vw; max-height: 10vw;\">
                        page sorce is ".$pageid."
                    </div>
                    <div class=\"spacer supchild\"  style=\"background-color: #000021; color: #ffffffff; font-size:4vw; flex: 1; display: flex; top:30px; padding-top: 1vw;
                        border-bottom-right-radius: 5vw;
                        border-bottom-left-radius: 5vw;max-height: 10vw; min-height: 9vw;\">
                    page id is ".$sorce_H."
                    </div>
            <div class=\"spacer supchild\" style=\"background-color: rgba(0, 0, 0, 0);\"></div>
                <div class=\"supchild\" style=\" background-color: #000016; color: #ffffffff;  font-size:6vw; padding:30px; padding-top: 1vw; top:30px; border-top-right-radius: 5vw;border-top-left-radius: 5vw; border-bottom: 2px solid #ffffffff;\" >
                    ".$poster."
                </div>
            <div  class=\"supchild\" style=\"background-color: #000020;  color: #ffffffff; font-size:5vw; padding:30px; padding-top: 4vw;margin-top:0vws;border: 1px solid black ;border-bottom: 2px solid #ffffffff;\" >
                ".$tital."
            </div> 
        <div class=\"child child1 supchild\" style=\"background-color: #000000; color: #ffffffff; font-size:4vw; 
            flex: 1; display: flex; top:30px; padding-top: 1vw;flex-direction:column;border-bottom: 2px solid #ffffffff;\">
                ".$header." 
        </div>

        <div class=\"child child1 textbox supchild\" style=\"background-color: #000010; color: #ffffffff; font-size:5vw; flex: 1; display: flex;\">
            ".$boady."
        </div>

        <img src=\"".$linked."\" class =\"img\" alt=\"\"

        style=\"border-top-right-radius: 0vw;border-top-left-radius: 0vw; border-bottom-right-radius: 0vw;
        border-bottom-left-radius: 0vw;border-bottom: 2px solid #ffffffff;\"
         >
        <div class=\"spacer supchild\" style=\"font-size:4vw; color: #ffffffff;  2px solid #ffffffff;\">
                <button class = 
                \"button\" 
                onclick=\"window.location.href='V5.php?pageid=".$diplayed_page."';\">
                go2page
                </button>
                <button class = 
                \"button\" 
                onclick=\"window.location.href='V5.php?pageid=".$sorce_HH." ';\">
                sorce
                </button>
                <button class = 
                \"button\" 
                onclick=\"window.location.href='post_page2.php?pageid=".$diplayed_page."  ';\">
                reply
                </button><br>
                <br>
        </div>
        <div  class=\"supchild\" style=\"background-color: #000020;  color: #ffffffff; font-size:5vw; 
        padding:30px; padding-top: 4vw;margin-top:0vws;border: 1px solid black ;border-bottom: 2px solid #ffffffff;

        border-bottom-right-radius: 3vw;border-bottom-left-radius: 3vw;border-bottom:
        \" >
            ".$diplayed_page."
        </div> 


    <div class=\"spacer supchild\" style=\"background-color: rgba(0, 0, 0, 0); \"></div>


    ";
    
    ?>
