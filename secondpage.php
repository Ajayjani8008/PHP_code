<html>
<form action="secondpage.php" method="post">
    <!-- Enter your log_in id:
    <input type="text" name="log_in_id">
    creat stonger password:
    <input type="password" name="password"> -->

    Enter a Number:
    <input type="number" name="number">

    <input type="submit" value="check">
</form>

</html>
<?php
// $log_in_id = $_POST["log_in_id"];
// echo "user id is $log_in_id";
// $userpassword = $_POST["password"];
// echo "your password is $userpassi

$number = $_POST["number"];
$count == 0;
for ($i = 1; $number <= $i; $i++) {

    if ($number % $i == 0) {
        $count++;
    }
}
if ($count == 2) {
    echo "ohh yaaa number is prime";
}
?>