<?php


class Album
{
    private $photos;
    private $title;
    private $thumbnail;
    private $author;
    private $date;

    public function getPhotos()
    {
        return $this->photos;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
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