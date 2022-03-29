<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me form assignment</title>
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
            <a href="loginPage.php" class="nav-link">Admin Panel</a>
            </div>
        </div>
        </nav>
    </div>
<div class="container w-50 m-auto">
        <div class="shadow-lg p-5 mt-5">
        <div class="text">
            <h1 class="text-center"><i>CONTACT ME<i></h1>
        </div>
        <form action="submission.php" method="POST" autocomplete="off">
            <div class="my-4 row">
              <div class="col-sm-12 col-md-6">
                <label for="username">First Name </label>
                <input type="text"  name="firstName" id="firstName" class="form-control shadow" required>
              </div>
              <div class="col-sm-12 col-md-6">
                <label for="username">Last Name </label>
                <input type="text" name="lastName" id="lastName" class="form-control shadow" required>
              </div>
            </div>
            <div class="my-4">
              <label for="email">E-mail </label>
              <input type="email" name="email" id="email" class="form-control shadow" required>
            </div>
            <div class="my-4">
              <label for="contact">Contact </label>
              <input type="number" name="contact" id="contact" class="form-control shadow" required>
            </div>
            <div class="my-4">
              <label for="message">Message </label>
              <textarea name="message" id="message" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <button class="btn btn-outline-primary shadow">Send Message</button>
        </form>
        
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>