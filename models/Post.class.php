<?php

class Post
{
    private $id;
    private $header;
    private $title;
    private $author;
    private $image;
    private $content;
    private $date;

    // public static $posts;

    public function __construct($id, $header, $title, $author, $image, $content, $date)
    {
        $this->id = $id;
        $this->header = $header;
        $this->title = $title;
        $this->author = $author;
        $this->image = $image;
        $this->content = $content;
        $this->date = $date;
        // self::$posts[] = $this;
    }

    public function getId()
    {
        return $this->id;
    }

    //HEADER//

    public function getHeader()
    {
        return $this->header;
    }

    public function setHeader($header)
    {
        $this->header = $header;
    }

    //TITLE//

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    //AUTHOR//

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    //IMAGE//

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    //CONTENT//

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    //DATE//

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
}
