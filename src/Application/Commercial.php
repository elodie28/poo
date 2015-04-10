<?php

namespace Application;

/**
 * Class Commercial
 */
class Commercial extends User implements EditeurInterface {



    /**
     * @var magasin
     */
    protected $magasin;

    /**
     * @var experience
     */
    protected $experience;



    /**
     * Constructeur d'objets
     * @param $nom
     * @param $prenom
     * @param $age
     * @param int $email
     * @param $magasin
     * @param $experience
     */
    public function __construct($nom, $prenom, $age, $email, $magasin, $experience) {
        parent:: __construct($nom, $prenom, $age, $email);
        $this->magasin=$magasin;
        $this->experience=$experience;
    }



    /**
     * Les méthodes de classe font des traitements et retournent une ou plusieurs valeurs
     * Vendre un article
     * @return string
     */
    public function vendre() {
        return $this->nom . "a vendu un article!";
    }

    /**
     * Promotionner un article
     * @return string
     */
    public function promotionner() {
        return $this->nom . " a promotionne un article";
    }


    /**
     * Méthode pour vendre et commenter
     * @param User $user
     * @param string $vendre
     * @param string $commenter
     * @return string
     */
    public function vendreCommenter(User $user, $vendre="", $commenter="") {
        return $this->vendre($user). " " . $this->commenter($message);
    }


    /**
     * @param \experience $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return \experience
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param \magasin $magasin
     */
    public function setMagasin($magasin)
    {
        $this->magasin = $magasin;
    }

    /**
     * @return \magasin
     */
    public function getMagasin()
    {
        return $this->magasin;
    }


    /**
     * Méthode pour Modérer un article
     * @param $article
     * @return string
     */
    public function moderer($article)
    {
        return $this->nom . " commercial a modéré l'article " . $article;
    }

    /**
     * Méthode pour Blamer un utilisateur
     * @param user $user
     * @return string
     */
    public function blamer(user $user)
    {
        return $this->nom . " commercial a blâmé l'utilisateur " . $user->getNom();
    }

    /**
     * Méthode pour Promouvoir un article
     * @param $article
     * @return string
     */
    public function promouvoir($article)
    {
        return $this->nom . " commercial a promu l'article " . $article;
    }


} // Fin de Class Commercial