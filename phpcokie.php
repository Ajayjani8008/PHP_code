<?php
setcookie("user","ajay");

?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE["user"])){
            echo "sorry,cookie is not found!";
        }
        else {
            echo "<br> Cookie value:".$_COOKIE["user"];
            
        }
        ?>
    </body>
</html>