<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
    <style>
        #abc {
            color: red;
            margin: 10px;
            background-color: aqua;
        }

        #abc input:hover {
            color: red;
            transform: scale(1.1);
        }

        table {
            color: red;
            margin: 10px;
            background-color: aqua;
            border: 2px solid blue;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <table id="abc">
            <tr>
                <th colspan="2">student detail</th>
            </tr>
            <tr>
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>age</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td>contact_num</td>
                <td><input type="number" name="contact"></td>
            </tr>
            <tr>
                <th colspan="2">persnal details</th>
            </tr>
            <tr>
                <td>pan</td>
                <td><input type="text" name="pan"></td>
            </tr>
            <tr>
                <td>aadhar</td>
                <td><input type="text" name="aadhar"></td>
            </tr>
        </table>
        <input type="submit" name="btnconnect" value="connect">
        <input type="submit" name="btninsert" value="insert">
        <input type="submit" name="btndelete" value="delete">
        <input type="submit" name="btnupdate" value="update">
        <input type="submit" name="btnselect" value="select">

    </form>
</body>

</html>
<?php
$name = $_POST["name"];
$age = $_POST["age"];
$contact = $_POST["contact"];
$pan = $_POST["pan"];
$aadhar = $_POST["aadhar"];


$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, '', 'ajaykumar');
if (!$conn) {
    echo 'Connected  not';


} else {
    echo 'Connected successfully';
}
// $sql = 'CREATE Database ajaykumar';

// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully.";


// } else {
//     echo "Sorry, database creation failed <br> ";
// }
$table = 'CREATE Table emp(emp_name VARCHAR(15),Age INT(3),contact_num INT(10),Pan VARCHAR(10), aadhar INT(12),primary key(aadhar) )';
if (mysqli_query($conn, $table)) {
    echo "<br>  table created successfully <br>";
} else {
    echo "table  not  created:";
}

if(isset($_POST['insert']))
    $insert='INSERT INTO emp (emp_name,Age,contact_num,Pan,aadhar) VALUES ('."$name".',"'.$age.")"
;

mysqli_close($conn);

?>