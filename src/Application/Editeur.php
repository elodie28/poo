<?php

namespace Application;

/**
 * Class Editeur
 */
class Editeur extends User implements EditeurInterface { // extends User pour hériter de ma classe User


    /**
     * @var nom
     */
    //protected $nom;

    /**
     * @var prenom
     */
    //protected $prenom;

    /**
     * @var email
     */
    //protected $email;

    /**
     * @var presse
     */
    protected $presse;


    /**
     * Constructeur d'objets qui prend 4 paramètres (utilisé pour construire les objets)
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $presse
     */
    public function __construct($nom, $prenom, $email, $presse ) {
        parent:: __construct($nom, $prenom, $email); // J'appelle le constructeur parent qui est celui de User
        //$this->nom = $nom;
        //$this->prenom = $prenom;
        //$this->email = $email;
        $this->presse = $presse;
    }



    /**
     * @param \presse $presse
     */
    public function setPresse($presse)
    {
        $this->presse = $presse;
    }

    /**
     * @return \presse
     */
    public function getPresse()
    {
        return $this->presse;
    }



    /**
     * Méthode pour Modérer un article
     * @param $article
     * @return string
     */
    public function moderer($article)
    {
        return $this->nom . " éditeur a modéré l'article " . $article;
    }

    /**
     * Méthode pour Blamer un utilisateur
     * @param user $user
     * @return string
     */
    public function blamer(User $user)
    {
        return $this->nom . " éditeur a blâmé l'utilisateur " . $user->getNom();
    }

    /**
     * Méthode pour Promouvoir un article
     * @param $article
     * @return string
     */
    public function promouvoir($article)
    {
        return $this->nom . " éditeur a promu l'article " . $article;
    }


    public function repondre(User $user, $message = "Aucun message") {
        return "Un éditeur a répondu au commentaire";
    }


} // Fin de Class Editeur