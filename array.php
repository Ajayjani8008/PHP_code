<?php

$season = array("ajay", "jani", "dihor", "talaja", "bhavnagar");

echo " this is  my arry";


foreach ($season as $a) {
    echo "____>>>>>" . $a, "<br>";
}


// assosiative array
echo count($season);
$salary = array("sonoo" => "55000", "ajay" => "25000", "Ratan" => "200000");
$salary["ajay"] = "2342983";
$salary["mehul"] = "ok";
$salary["bhadresh"] = "......././././../";
echo "sonoo salaray:" . $salary["sonoo"], "<br>";
echo "ajay salaray:" . $salary["ajay"], "<br>";
echo "bhadresh salaray:" . $salary["bhadresh"], "<br>";

foreach ($salary as $k => $v) {
    echo "key:" . $k . "value:" . $v . "<br/>";
}

//multidimentional array
$emp = array(
    array(1, "ajay", 40000),
    array(2, "ketan", 50000),
    array(3, "kaushik", 60000),
    array(4, "sanjay", 70000)
);
for($row=0;$row<4;$row++){
    for($col=0;$col<4;$col++){
        echo $emp[$row][$col]."   ";

    }
    echo "<br>";
}
print_r(array_change_key_case($salary,CASE_UPPER));


?>