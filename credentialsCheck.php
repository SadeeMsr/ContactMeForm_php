<?php
$email = $_POST['email'];
$password = $_POST['password'];

$link = mysqli_connect("localhost", "root", "", "formDB");

if($link === false){
    die("Error: ".mysqli_connect_error());
}

$sql = "SELECT * FROM user_credentials";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["Email"]===$email && $row["Password"]===$password){
            header('location:adminPanel.php');
        }else{
        }
    }

} else {
    echo "0 results";
}

mysqli_close($link);

?>