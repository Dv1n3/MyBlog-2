<?php

/**
 * Created by PhpStorm.
 * User: dvine
 * Date: 25/04/2018
 * Time: 11:49
 */
class PostBlog
{
    protected $id;
    protected $author;
    protected $title;
    protected $content;
    protected $smallContent;
    protected $creationDate;
    protected $img;

    /**
     * PostBlog constructor.
     * @param $id
     * @param $author
     * @param $title
     * @param $content
     * @param $creationDate
     */
    public function __construct($author, $title, $content, $smallContent, $creationDate, $img=null)
    {
        $this->author = $author;
        $this->title = $title;
        $this->content = $content;
        $this->smallContent = $smallContent;
        $this->creationDate = $this->getCreationDate();
        $this->img = $this->getImg();
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return DateTime
     */
    public function getCreationDate()
    {
        $this->creationDate = new DateTime();
        return $this->creationDate;

    }

    /**
     * @param DateTime $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getSmallContent()
    {
        return $this->smallContent;
    }

    /**
     * @param mixed $smallContent
     */
    public function setSmallContent($smallContent)
    {
        $this->smallContent = $smallContent;
    }
}