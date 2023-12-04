<?php

class PostManager{

    private $posts = [];

    public function getPosts(){
        return $this->posts;
    }

    public function addPost(Post $post){
        $this->posts[] = $post;
    }
}