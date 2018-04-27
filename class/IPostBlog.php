<?php

interface IPostBlog
{
    public function findAll();

    public function findById(PostBlog $postBlog);

    public function insert(PostBlog $postBlog);

    public function delete(PostBlog $postBlog);

    public function update(PostBlog $postBlog);
}