<?php

interface IPostBlog
{
    public function findAll();

    public function findById($id);

    public function insert(PostBlog $postBlog);

    public function delete(PostBlog $postBlog);

    public function update(PostBlog $postBlog);
}