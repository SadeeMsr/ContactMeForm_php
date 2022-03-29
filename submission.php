<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$msg = $_POST['message'];



$link = mysqli_connect("localhost", "root", "", "formDB");

if($link === false){
    die("Error: ".mysqli_connect_error());
}

$sql = "INSERT INTO contact_messages (firstName,lastName,email,contact,message) values ('$firstName','$lastName','$email', '$contact','$msg')";


            if(mysqli_query($link, $sql)){
                
                header("Location:contactMe.php");
                echo "<script> alert('You Successfully texted me') </script>";
            }
            
            else{
                echo "Error: ".mysqli_error($link);
            }


mysqli_close($link);
?>