  

<?php


$checkurl="http://alexhaussmann.com/adhaussmann/l/rem_key.php?key=".$_GET["key"]."&name=".$_GET["name"];



?>
we in here
</br>
</br>
<?php echo "\"".$checkurl."\"" ?>
<!-- (A) LOAD QRCODEJS LIBRARY -->
<!-- https://cdnjs.com/libraries/qrcodejs -->
<!-- https://github.com/davidshimjs/qrcodejs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

<!-- (B) GENERATE QR CODE HERE -->
<div id="qrcode"></div>

<!-- (C) CREATE QR CODE ON PAGE LOAD -->
<script>
window.addEventListener("load", function(){
  var qrc = new QRCode(document.getElementById("qrcode"), <?php echo "\"".$checkurl."\"" ?>);


});





</script>


