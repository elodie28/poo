<?php

namespace Application;


/**
 * Class User
 */
class User extends AbstractUser implements AuthentificationInterface, InscriptionInterface {
// La class User hérite de cette classe abstraite AbstractUser,
// les méthodes se trouvant dans la classe abstraite doivent être réimplantées dans les classes filles (ici la class User)

    /**
     * @var age
     */
    protected $age;



    /**
     * Constante de Pays
     */
    const PAYS = "France";

    /**
     * Constante de Langues
     */
    const LANGUES = "français et l'anglais";

    /**
     * Constante de Formation
     */
    const FORMATION = "3W Academy";


    /**
     * Méthode pour commenter
     */
    public function commenter() {
        return $this->nom . " a commenté !";
    }

    /**
     * Méthode pour noter
     */
    // $this représente mon objet et passe par la méthode __toString() pour retourner le nom et le prénom
    // L'objet est converti en chaîne de caractères grâce à la méthode __toString()
    public function noter($note = 4) {
        return $this . " a noté " . $note;
    }


    /**
     * Intéragir avec un utilisateur, un message et une note
     * @param User $user
     * @param string $message
     * @param $note
     */
    public function interagir(User $user, $message = "", $note) {
        // Appel de la méthode repondre() et de la méthode noter() en interne
        return $this->repondre($user, $message) . " " . $this->noter($note);
    }




    /**
     * Pour partager sur les réseaux sociaux
     * Final signifie que c'est une méthode qui ne pourra pas se réécrire par les classes filles
     */
    public final function partagerReseauxSociaux() {
        return $this . " a partagé sur Facebook et Twitter";
    }


    /**
     * Répondre à un autre utilisateur
     * @param User $user
     */
    public function repondre(User $user, $message = "Aucun message") {
        return $this . " a répondu au commentaire de " .$user->nom . ":" . $message;
    }


    /**
     * @return mixed
     */
    public function inscription()
    {
        return "L'écrivain " . $this->nom . "s'est bien inscrit !";
    }


    /**
     * Méthode connexion
     * @return mixed
     */
    public function connexion()
    {
        return "L'écrivain " . $this->nom . "s'est bien connecté !";
    }



    /**
     * Constructeur d'objet qui prend 4 paramètres
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $age
     */
    public function __construct($nom, $prenom, $email, $age=26) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->age = $age;

    }

    /**
     * @param \age $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return \age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Méthode Set Last Login
     * @param $date
     * @return mixed
     */
    public function setLastLogin($date)
    {
        // TODO: Implement setLastLogin() method.
    }

    /**
     * Méthode Get Last login
     * @return mixed
     */
    public function getLastLogin()
    {
        // TODO: Implement getLastLogin() method.
    }

    /**
     * Méthode Set Date Created
     * @param $date
     * @return mixed
     */
    public function setDateCreated($date)
    {
        // TODO: Implement setDateCreated() method.
    }

    /**
     * Méthode Get Date Created
     * @return mixed
     */
    public function getDateCreated()
    {
        // TODO: Implement getDateCreated() method.
    }


    /**
     * Méthode statique utilise des constantes
     * C'est une méthode qui n'est pas dynamique, qui est constante et que je ne peux pas modifier
     * C'est une méthode commune à tous mes objets
     * @return string
     */
    static public function getPays() {
        return "Tous les utilisateurs viennent de " . self::PAYS;
    }

    /**
     * @return string
     */
    static public function getFormation() {
        return "Tous les utilisateurs proviennent de la " . self::FORMATION;
    }

    /**
     * @return string
     */
    static public function getLangues() {
        return "Tous les utilisateurs parlent le " . self::LANGUES;
    }


    /**
     * Méthode Désinscription
     * @return mixed
     */
    public function desinscription()
    {
        // TODO: Implement desinscription() method.
    }



    /**
     * La fonction "magique" toString() permet de convertir mon objet en chaîne de caractères
     * @return string
     */
    public function __toString() {
        return $this->nom. " ". $this->prenom;
    }


} // Fin de Class User