<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
//$host = 'localhost:3306';
//$host = 'db';//spec Docker'iui
$host = 'mysql_basic_img';//spec Docker'iui
$user = 'root';
$pass = 'example';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS arvidija DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci"))
{
    echo "<br>bazė arvidija sukurta<br>";
}
else
{
    trigger_error("nesukurta: "  . mysqli_error($conn), E_USER_ERROR);
}
mysqli_close($conn);

echo "Connected to MySQL successfully!";
echo phpinfo();
?>