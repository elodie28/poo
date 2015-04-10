<?php

namespace Application;

/**
 * Classe qui me sert de modèle aux classes filles qui hériteront de cette classe
 * Nomenclature : mon nom de classe abstraite est préfixée par le mot clef "abstract"
 * Class AbstractUser
 */
abstract class AbstractUser implements CRUDInterface {


    /**
     * @var prenom
     */
    protected $prenom;


    /**
     * @var nom
     */
    protected $nom;


    /**
     * @var email
     */
    protected $email;


    /**
     * @var genre
     */
    protected $genre;


    /**
     * @var connexion
     */
    protected $connexion;



    /**
     * @param \prenom $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return \prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }


    /**
     * Méthode Get Nom
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Méthode Set Nom
     * @param $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    /**
     * Get Email
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set Email
     * @param $email
     */
    public function setEmail($email) // le nom de la méthode ET l'argument doivent être compatibles (les mêmes)
        // entre la classe abstraite et les classes filles
    {
        $this->email = $email;
    }


    /**
     * Méthode get Genre
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Méthode Set Genre
     * @param $genre
     * @return mixed
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }


    /**
     * @return mixed
     */
    public abstract function inscription();


    /**
     * @return mixed
     */
    public abstract function connexion();


    /**
     * Méthode déconnexion
     * @return mixed
     */
    public function deconnexion()
    {
        return $this->prenom . " s'est bien déconnecté";
    }



    /**
     * Méthode pour Créer un article
     * @return mixed
     */
    public function creer()
    {
        // TODO: Implement creer() method.
    }

    /**
     * Méthode pour Lister tous les articles
     * @return mixed
     */
    public function lister()
    {
        // TODO: Implement lister() method.
    }

    /**
     * Méthode pour Voir un article
     * @param $id
     * @return mixed
     */
    public function voir($id)
    {
        // TODO: Implement voir() method.
    }

    /**
     * Méthode pour Éditer un article
     * @param $id
     * @return mixed
     */
    public function editer($id)
    {
        // TODO: Implement editer() method.
    }

    /**
     * Méthode pour Supprimer un article
     * @param $id
     * @return mixed
     */
    public function supprimer($id)
    {
        // TODO: Implement supprimer() method.
    }


}

?>