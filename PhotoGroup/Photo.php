<?php


class Photo
{
    private $path;
    private $name;
    private $size;
    private $status;
    private $isCensored;
    private $description;
    private $author;
    private $date;
    private $tags;

    public function getPath()
    {
        return $this->path;
    }

    public function getIsCensored()
    {
        return $this->isCensored;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getDate()
    {
        return $this->date;
    }


}