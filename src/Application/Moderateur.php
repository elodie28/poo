<?php

namespace Application;


/**
 * Class Moderateur
 */
class Moderateur extends User {

    /**
     * @var etoile
     */
    protected $etoile;

    /**
     * @var description
     */
    protected $description;


    /**
     * Méthode pour blâmer un utilisateur
     * @return string
     */
    public function blamer(User $user) {
        return $this->nom . " a blamé l'utilisateur " . $user->nom;
    }


    /**
     * Noter qui écrase la méthode noter() de ma classe parente User
     * C'est ce que l'on appelle l'override (réécriture)
     * @param int $note
     * @return string
     */
    public function noter($note = 4) {
        //return parent::noter($note); -> permet de retourner la méthode parente (ici la méthode User)
        return "Un modérateur a noté la note de ".$note;
    }



    /**
     * Constructeur d'objets de ma class Moderateur
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $age
     * @param $etoile
     * @param $description
     */
    public function __construct($nom, $prenom, $niveau, $email="", $age="", $etoile="", $description=""){
        // J'appelle mon constructeur parent
        parent::__construct($nom, $prenom, $email, $age);
        $this->etoile = $etoile;
        $this->description = $description;
    }


    /**
     * @param \description $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return \description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \etoiles $etoiles
     */
    public function setEtoiles($etoiles)
    {
        $this->etoiles = $etoiles;
    }

    /**
     * @return \etoiles
     */
    public function getEtoiles()
    {
        return $this->etoiles;
    }


}