<html>
<form action="welcome.php" method="get">
    Name:
    <input type="text" name="name"> <br><br><br>

    Enter your address: <textarea name="address" id="101" cols="20" rows="2"></textarea>
    <br>
    <br>
    <br>
    <input type="radio" name="Gender" value="Male" id="102">Male
    <input type="radio" name="Gender" value="Female" id="103">Female
    <br>
    <br>
    <br>
    <input type="submit" value="visit">

</form>

</html>

<?php
$name = $_GET["name"];
echo "welcome , $name";
$address = $_GET["address"];
echo " employee address is " . $address;
$Gender = $_GET["Gender"];
echo "it's $Gender employee";
?>