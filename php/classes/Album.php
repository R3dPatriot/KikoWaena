<?php


class Album
{
    //Attributes
    private $id;
    private $titre;
    private  $idAuteur;
    private $listePhotos;

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getIdAuteur()
    {
        return $this->idAuteur;
    }

    public function getListePhotos()
    {
        return $this->listePhotos;
    }


}