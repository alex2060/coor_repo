
<?php 

$bothtml="
<div class=\"child child1\" style=\"background-color: #000000; display: flex; justify-content: Space-between; color: #ffffffff; font-size: 10vw; flex: 1;\">


                            <button class = 
                                \"button\" 
                                onclick=\"window.location.href='V5.php?pageid=".$pageid."&user_seach=".$seach_item."&page_number=".($page_number-1)."';\" >
                                prev
                            </button>


                            <button class = 
                                \"button\" 
                                onclick= \"window.location.href='V5.php?pageid=".$pageid."&user_seach=".$seach_item."&page_number=".($page_number+1)."';\" >
                                next
                            </button>





                    </div>


                <div class=\"spacer\">

                </div>



                    <div class=\"spacer\" style=\"color: #ffffffff; font-size: 10vw; flex: 1;\" >

                    </div>
                    
                <div class=\"child child1\" style=\"background-color: #000000; display: flex; justify-content: Space-between; color: #ffffffff; font-size: 10vw; flex: 1;
                min-height: 45vw;
                \">

                        <form action=\"\" >
                            <label for=\"fname\">Search page</label>
                            <input class= \"serachbox\" type=\"text\" id=\"fname\" name=\"pageid\" id=\"pageid\" value= \" ".$pageid." \" > 
                             <label for=\"fname\">Search term</label>
                            <input class= \"serachbox\" type=\"text\" id=\"fname\" name=\"user_seach\" id=\"user_seach\">           
                            <input class = \"button\" type=\"submit\" value=\"Submit\"  >
                        </form>
                </div>


                <div class=\"spacer\" style=\"color: #ffffffff; font-size: 6vw; flex: 1;\" >

                 \"logedin as ".$uname."
                </br>

                </div>

                <div class=\"spacer\" style=\"color: #ffffffff; font-size: 6vw; flex: 1;\" >


                            <button class = 
                                \"button\" 


                                onclick=

                                 
                                 \"window.location.href='post_page2.php?pageid=".$pageid."' \" >
                                reply to page

                            </button>
                 
                 </div>

                         <div class=\"spacer\" style=\"color: #ffffffff; font-size: 3vw; flex: 1;\" >
                         
                         datumes changed.php
                        </div>

                    <div class=\"spacer\" style=\"color: #ffffffff; font-size: 3vw; flex: 1;\" >
                        <button class = 
                                \"button\" 


                                onclick=
                                  \"window.location.href='admin_page.html' \"  >
                                adminpage

                        </button>

                    </div>



                    <div class=\"spacer\" style=\"color: #ffffffff; font-size: 10vw; flex: 1;\" >

                    </div>


    </div>



            <!--end parret-->
            <div class=\"parent ppsidebar\" style=\"font-size:4vw; color: #ffffffff; border-bottom-right-radius: 3vw;border-bottom-left-radius: 3vw;border-bottom: 2px solid #ffffffff; \">
                <div class=\"spacer ppsidebar\" style=\"color: #ffffffff; font-size: 4vw; flex: 1;\" >
                                </br>
                                    <form action=\"\" >
                                        <BR>
                                        <BR>
                                        <label for=\"fname\">Search page</label></br>
                                        <input class= \"serachbox3\" type=\"text\" id=\"fname\" name=\"pageid\" id=\"pageid\" value=\"%%\" > </br>
                                         <label for=\"fname\">Search term</label></br>
                                        <input class= \"serachbox3\" type=\"text\" id=\"fname\" name=\"user_seach\" id=\"user_seach\">           
                                        <input class = \"button\" type=\"submit\" value=\"Submit\"  >
                                    </form>

                                <div class=\"spacer\" style=\"color: #ffffffff; font-size: 10vw; flex: 1;]\" >

                                    <button class = 
                                        \"button\" onclick=\"parent.location.href='http://alexhaussmann.com/adhaussmann/alex/dat2/log_in.php '\" >
                                        sister sight
                                    </button><br></br>


                                    <button class = 
                                       \"button\" onclick=\"location.href='extra/menue.html' \" >
                                        menue
                                    </button>

                                    <br>
                                    <br>
                                    <button class = 
                                        \"button\" onclick=\"window.location.href='post_page2.php?pageid=%%' \" >
                                        link3
                                    </button>

                                </div>
                </div>
            </div>


    </div>




    </div>
        




</div>
        

        
    </body>




    
    
</html>";

?>
