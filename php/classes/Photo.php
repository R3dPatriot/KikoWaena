<?php


class Photo
{
    //Attributes
    private $idImage;
    private  $idAuteur;
    private $nomAuteur;
    private $prenomAuteur;
    private $titre;
    private $nbLikes;
    private $nbDislikes;
    private $listeCommentaires;
    private $listeAlbums;

    //Getters
    public function getIdImage()
    {
        return $this->idImage;
    }

    public function getIdAuteur()
    {
        return $this->idAuteur;
    }

    public function getNomAuteur()
    {
        return $this->nomAuteur;
    }

    public function getPrenomAuteur()
    {
        return $this->prenomAuteur;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    function getNbLikes()
    {
        return $this->nbLikes;
    }

    public function getNbDislikes()
    {
        return $this->nbDislikes;
    }

    public function getListeCommentaires()
    {
        return $this->listeCommentaires;
    }

    public function getListeAlbums()
    {
        return $this->listeAlbums;
    }


}