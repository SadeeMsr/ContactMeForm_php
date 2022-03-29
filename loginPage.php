
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container w-50 m-auto">
        <div class="shadow-lg p-5 mt-5">
        <div class="text">
            <h1 class="text-center"><i>Login<i></h1>
        </div>
        <form action="credentialsCheck.php" method="POST" autocomplete="off">
            <div class="my-4">
              <label for="email">E-mail </label>
              <input type="email" name="email" id="email" class="form-control shadow" required>
            </div>
            <div class="my-4">
              <label for="contact">Password </label>
              <input type="password" name="password" id="contact" class="form-control shadow" required>
            </div>
            <button class="btn btn-outline-primary shadow">Log in</button>
        </form>
        </div>
    </div>
</body>
</html>