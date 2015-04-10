<?php

namespace Application;

interface CRUDInterface {


    /**
     * Méthode pour Créer un article
     * @return mixed
     */
    public function creer();


    /**
     * Méthode pour Lister tous les articles
     * @return mixed
     */
    public function lister();


    /**
     * Méthode pour Voir un article
     * @param $id
     * @return mixed
     */
    public function voir($id);


    /**
     * Méthode pour Éditer un article
     * @param $id
     * @return mixed
     */
    public function editer($id);


    /**
     * Méthode pour Supprimer un article
     * @param $id
     * @return mixed
     */
    public function supprimer($id);


} // Fin de l'interface CRUDInterface

?>