<?php
$link = mysqli_connect("localhost", "root", "", "formDB");

if($link === false){
    die("Error: ".mysqli_connect_error());
}

$sql = "SELECT * FROM contact_messages";

$result = $link->query($sql);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <a href="contactMe.php" class="nav-link">Log out</a>
            </div>
        </div>
        </nav>
</div>


<div class="container w-50 m-auto">
        <div class="shadow-lg p-5 mt-5">
            <div class="text">
                <h1 class="text-center"><i>Messages<i></h1>
                <hr>
            </div>
            <div class="d-flex flex-column align-items-center">

                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

                        echo '<div class="card text-dark bg-info mb-3" style="max-width: 30rem;">
                        <div class="card-body">
                            <h5 class="card-title">'.$row["firstName"]." ".$row["lastName"].'</h5>
                            <p class="card-text">'.$row["message"].'</p>
                        </div>
                        <div class="card-footer bg-transparent">'.$row["time"]. " | ". $row["contact"]." | " .$row["email"].'</div>
                    </div>' ;
                    }

                } else {
                    echo "0 results";
                }

                mysqli_close($link);
                ?>
           
           </div>
            </div>
           
    </div>
    
</body>
</html>