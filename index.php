<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ff17244aa6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>REST/PHP</title>
</head>
<body>

<div class="container">
    <p class="m-5 display-6">Send a Get Request</p>

    <form class="m-5" action="requests/get.php" method="GET">
    <input  class="form-control mb-1" type="search" name="search" placeholder="University Location or Name" /> <br>
    <div class="mt-2">
        <button class="btn btn-primary btn-sm" type="submit">Search</button>
        <a class="btn btn-dark btn-sm" href="requests/get.php">Get All</a>
    </div>

    </form>


    <p class="m-5 display-6">Add a University</p>
    <form class="m-5" action="requests/post.php" method="POST">
    <input  class="form-control mb-1" type="text" name="name" placeholder="University Name" /> <br>
    <input  class="form-control mb-1" type="text" name="location" placeholder="University Location" /> <br>

    <div class="mt-2">
        <button class="btn btn-primary btn-sm" type="submit">Post</button>
    </div>

    </form>

</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>