<?php
/**
 * Created by PhpStorm.
 * User: dvine
 * Date: 27/04/2018
 * Time: 09:35
 */
include 'C:\wamp64\www\MyBlog-2\class\PostBlogDAO.php';
include 'C:\wamp64\www\MyBlog-2\class\PostBlog.php';

if(isset($_POST['pwd']) && $_POST['pwd'] === "root")
{
    if (isset($_POST['author']) && isset($_POST['title']) && isset($_POST['smallContent']) && isset($_POST['content']))
    {


        try{
            $db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
            $postBlogManager    = new PostBlogDAO($db);
            $postBlog           = new PostBlog($_POST['author'],$_POST['title'], $_POST['content'],  $_POST['smallContent'], '');

            $data = $postBlogManager->insert($postBlog);
            if($data)
            {
                echo "Article créé";
            }
        }
        catch (Exception $e) {
            echo 'Exception reçue : ', $e->getMessage(), "\n";
        }
    }
    else
    {
        echo "Vous n'avez pas rempli tous les champs";
    }
}
else{
    echo "Votre mot de passe n'est pas bon !";
}
