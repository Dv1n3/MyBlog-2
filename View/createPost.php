<?php
include '../../MyBlog-2\class\Form.php';
include '../../MyBlog-2\class\PostBlogDAO.php';

$form = new Form();
?>

<!DOCTYPE html>
<html>
<head>
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

    <title>Créer un post</title>
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
    <div >
        <h1 class="well well-lg">My Blog</h1>
    </div>
    <form method="POST" action="../Controller/PostController.php">
        <div class="form-group row">
        <label for="author" class="col-sm-2 col-form-label">Auteur</label>
            <div class="col-sm-4">
                <input type="text" name="author" class="form-control" id="author">
            </div>
        </div>
            <div class="form-group row">
        <label for="pwd" class="col-sm-2 col-form-label">Mot de passe</label>
        <div class="col-sm-4">
            <input type="password" name="pwd" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        </div>
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Titre</label>
            <div class="col-sm-4">
                <input type="text" name="title" class="form-control" id="title">
            </div>
        </div>
        <div class="form-group row">
            <label for="smallContent" class="col-sm-2 col-form-label">Déscriptif</label>
            <div class="col-sm-8">
                <textarea name="smallContent" id="smallContent" class="form-control" cols="30" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label">Contenu</label>
            <div class="col-sm-8">
                <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-4">
                <input type="text" name="image" class="form-control" id="image">
            </div>
        </div>
        <input type="submit" value="créer" class="btn btn-success flex-row-reverse">

    </form>

</body>
</html>
