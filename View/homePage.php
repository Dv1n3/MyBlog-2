<?php
include '../../MyBlog-2\class\DataBase.php';
include '../../MyBlog-2\class\PostBlog.php';
include '../../MyBlog-2\class\PostBlogDAO.php';
include '../../MyBlog-2\class\IPostBlog.php';

//$db = new DataBase('$mysql', 'blog', 'localhost', 'root', '');
//$connexion = $db->getPDO($db);
$db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
$postBlog = new PostBlogDAO($db);
$data = $postBlog->findAll();


//Autoloader::register();
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
    <h1 class="h1"><center>My Blog </center></h1>

</div>
        <form method="POST" action="../Controller/ArticlesController.php">
            <input type="submit" value="Exporter les Articles" class="btn btn-dark flex-row-reverse">
        </form>
<hr>
<div class="card">
    <?php
    foreach ($data as $key => $value) {
        echo "<div class=\'card-header\'>
        <div class='d-flex justify-content-between row'>
            <h2 class='card-title col-md-9 h2 text-muted'>" . $value['title'] . "</h2>
                
                <p class='col-md-3'>posté par " . $value['author'] . " le " . $value['creationDate'] . "</p>
                </div>
                    <div class='row'>
                    <img src='" . $value["img"] . "'alt='#' class='col-md-3' width='75px' height='150px'>
                        <p class='col-md-9'>" . $value['smallContent'] . "</p>
                </div>
                <a  class='btn btn-light d-flex flex-row-reverse' href='../../MyBlog-2/View/PostDetail?id=" . $value['id'] . ".php'>En savoir plus</a>
                </div>
                <br>";
        if (next($data) != null) {
            echo "<hr>";
        } else {
            echo "<br></div></div>";
        }
    }
    ?>
</div>
</body>
</html>