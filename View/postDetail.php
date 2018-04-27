<?php
include '../../MyBlog-2\class\DataBase.php';
include '../../MyBlog-2\class\PostBlog.php';
include '../../MyBlog-2\class\PostBlogDAO.php';
include '../../MyBlog-2\class\IPostBlog.php';

//$db = new DataBase('$mysql', 'blog', 'localhost', 'root', '');
//$connexion = $db->getPDO($db);
$id = $_GET['id'];
$db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
$postBlog = new PostBlogDAO($db);

$data = $postBlog->findById($id);
//Autoloader::register();
?>
<!DOCTYPE html>
<html>
<head>
    <title><center>My Blog</center></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../../MyBlog-2/View/homePage.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../MyBlog-2/View/createPost.php">Create post</a>
            </li>
        </ul>
    </div>
</nav>
<div>
    <h1>My Blog</h1>
</div>
<div class="card">

    <?php
        echo "<div class=\'card-header\'>
        <div class='d-flex justify-content-between'><h2 class='card-title col-xs'>" . $data['title'] . "</h2>
                </div>
                <p class='d-flex flex-row-reverse'>posté par " . $data['author'] . " le " . $data['creationDate'] . "</p>
                <p>" . $data['content'] . "</p>
                </div>
                <br>";

            echo "<hr>";

            echo "<br></div></div>";


    ?>



</div>
</body>
</html>