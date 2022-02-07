<?php

class Bonnet
{
    private $nom;
    private $prix;
    private $description;
    private $image;
    private $taille;
    private $matiere;

    public function __construct($nom, $prix, $description, $image, $taille, $matiere)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->description = $description;
        $this->image = $image;
        $this->taille = $taille;
        $this->matiere = $matiere;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($new_nom)
    {
        $this->nom = $new_nom;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($new_prix)
    {
        $this->prix = $new_prix;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage($new_image)
    {
        $this->image = $new_image;
    }

    public function getTaille()
    {
        return $this->taille;
    }

    public function setTaille($new_taille)
    {
        $this->taille = $new_taille;
    }

    public function getMatiere()
    {
        return $this->matiere;
    }
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }
}
