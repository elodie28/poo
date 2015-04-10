<?php

namespace Application;

interface EditeurInterface {

    /**
     * Méthode pour modérer un article
     * @param $article
     * @return mixed
     */
    public function moderer($article);

    /**
     * Méthode pour blâmer un utilisateur
     * @param $user
     * @return mixed
     */
    public function blamer(User $user);

    /**
     * Méthode pour promouvoir un article
     * @param $article
     * @return mixed
     */
    public function promouvoir($article);

}

?>