<?php


class Photo
{
    //Attributes
    private $idImage;
    private $idAuteur;
    private $titre;
    private $nomAuteur;
    private $prenomAuteur;
    private $nbLikes;
    private $nbDislikes;
    private $listeCommentaires;
    private $listeAlbums;

    //Constructors
    public function __construct($idImage=NULL, $idAuteur=NULL, $titre='defaultTitle', $nomAuteur='defaultSurname', $prenomAuteur='defaultFirstName', $nbLikes=0, $nbDislikes=0, $listeCommentaires=NULL, $listeAlbums=NULL) {
        $this->idImage = $idImage;
        $this->idAuteur = $idAuteur;
        $this->titre = $titre;
        $this->nomAuteur = $nomAuteur;
        $this->prenomAuteur = $prenomAuteur;
        $this->nbLikes = $nbLikes;
        $this->nbDislikes = $nbDislikes;
        $this->listeCommentaires = $listeCommentaires;
        $this->listeAlbums = $listeAlbums;
    }


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


    //Setters
    public function setIdImage($idImage)
    {
        $this->idImage = $idImage;
    }

    public function setIdAuteur($idAuteur)
    {
        $this->idAuteur = $idAuteur;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setNomAuteur($nomAuteur)
    {
        $this->nomAuteur = $nomAuteur;
    }

    public function setPrenomAuteur($prenomAuteur)
    {
        $this->prenomAuteur = $prenomAuteur;
    }

    public function setNbLikes($nbLikes)
    {
        $this->nbLikes = $nbLikes;
    }

    public function setNbDislikes($nbDislikes)
    {
        $this->nbDislikes = $nbDislikes;
    }

    public function setListeCommentaires($listeCommentaires)
    {
        $this->listeCommentaires = $listeCommentaires;
    }


    public function setListeAlbums($listeAlbums)
    {
        $this->listeAlbums = $listeAlbums;
    }




}