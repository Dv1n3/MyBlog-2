<?php

/**
 * Created by PhpStorm.
 * User: dvine
 * Date: 25/04/2018
 * Time: 11:54
 */
class PostBlogDAO
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM blog.blogdb";
        $data = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM blog.blogdb WHERE id = :id";

        $statement = $this->pdo->prepare($sql);
        $statement->bindParam('id', $id);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function delete(PostBlog $postBlog)
    {
        $success = false;
        if ($postBlog->getId() != null) {
            $sql = "DELETE FROM blog.blogdb WHERE id=" . $postBlog->getId();
            $statement = $this->pdo->prepare($sql);
            $success = $statement->execute([$postBlog->getId()]);
        }

        return $success;
    }

    /**
     * @param PostBlog $postBlog
     */
    public function insert(PostBlog $postBlog)
    {
        $sql = "INSERT INTO blog.blogdb (author, title, content, smallContent, creationDate) VALUES (:author, :title, :content, :smallContent, :creationDate)";
        $statement = $this->pdo->prepare($sql);
        //var_dump($statement);
        $statement->execute([
            "author" => $postBlog->getAuthor(),
            "title" => $postBlog->getTitle(),
            "content" => $postBlog->getContent(),
            "smallContent" => $postBlog->getSmallContent(),
            "creationDate" => $postBlog->getCreationDate()->format("Y-m-d H:i:s"),
        ]);
        return $this->pdo->lastInsertId();

    }

    public function update(PostBlog $postBlog)
    {
        $sql = "UPDATE blog.blogdb SET author=?, title=?, content=?, smallContent) WHERE id=" . $postBlog->getId();
        $statement = $this->pdo->prepare($sql);
        return $statement->execute(
            [
                $postBlog->getAuthor(),
                $postBlog->getContent(),
                $postBlog->getSmallContent(),
                $postBlog->getTitle(),
                $postBlog->getCreationDate()
            ]
        );
    }

    public function articlesToJson(){
        $sql = "SELECT blogdb.content FROM blog.blogdb";
        $data = $this->pdo->query($sql)->fetchAll();
        var_dump($data);
        $articles = "";
        foreach ($data as $content) {
            $articles .= json_encode($content);
        }
        $serialize = fopen('..\/serialize.txt', 'w+');
        echo $articles;
        fputs($serialize, $articles);
        fclose($serialize);
        if($data){
            return true;
        }
        return false;
    }
}