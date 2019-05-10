<?php


class Photo
{
    //To enter on user input
    private $path; //Check
    private $name; //Check
    private $description; //Nope
    //Hidden for the user
    private $author; //Hidden nope
    private $date; //Hidden nope
    private $size; //Useless
    //For admin only
    private $status;
    private $isCensored;

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