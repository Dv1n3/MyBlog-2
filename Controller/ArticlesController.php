<?php
include 'C:\wamp64\www\MyBlog-2\class\PostBlogDAO.php';

try {
    $db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
    $postBlogManager = new PostBlogDAO($db);

    $data = $postBlogManager->articlesToJson();
    if ($data) {
        echo "Les articles sont sous format json dans le fichier serialize.txt";
    }
} catch (Exception $e) {
    echo 'Exception reçue : ', $e->getMessage(), "\n";
}
?>