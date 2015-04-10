<?php

namespace Application;

class Auteur extends AbstractUser {


    /**
     * @var biographie
     */
    protected $biographie;


    /**
     * Méthode Get Biographie
     * @return mixed
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * Méthode Set Biographie
     * @param $biographie
     * @return mixed
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;
    }


    /**
     * @return mixed
     */
    public function inscription()
    {
        return "L'écrivain " . $this->nom . "s'est bien inscrit !";
    }


    /**
     * @return mixed
     */
    public function connexion()
    {
        return "L'écrivain " . $this->prenom . " s'est bien connecté !";
    }


    public function deconnexion() {
        return parent::deconnexion()."<br/>". "L'écrivain " . $this->prenom . " s'est déconnecté";
    }


}

?>