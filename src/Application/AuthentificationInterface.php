<?php

namespace Application;


interface AuthentificationInterface {

    /**
     * Méthode Set Last Login
     * @param $date
     * @return mixed
     */
    public function setLastLogin($date);

    /**
     * Méthode Get Last login
     * @return mixed
     */
    public function getLastLogin();

    /**
     * Méthode Set Date Created
     * @param $date
     * @return mixed
     */
    public function setDateCreated($date);

    /**
     * Méthode Get Date Created
     * @return mixed
     */
    public function getDateCreated();

}


?>