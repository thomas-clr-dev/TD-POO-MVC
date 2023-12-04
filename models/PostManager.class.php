<?php

require_once 'models/Model.class.php';

class PostManager extends Model{

    private $posts = [];

    public function getPosts(){
        return $this->posts;
    }

    public function addPost(Post $post){
        $this->posts[] = $post;
    }

    public function getPostFromDb(){
        $req = $this->getBdd()->prepare('SELECT * FROM posts');
        $req->execute();
        $posts = $req->fetchAll(PDO::FETCH_ASSOC);
        print_r($posts);
        foreach($posts as $post){
            $this->addPost(new Post($post['id'], $post['header'], $post['title'], $post['author'], $post['image'], $post['content'], $post['date']));
        }
    }
}