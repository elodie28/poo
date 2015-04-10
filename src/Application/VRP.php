<?php

namespace Application;

/**
 * Class finale : on ne peut pas hériter de cette classe
 * Class VRP
 * @package Application
 */
final class VRP extends Commercial {

    /**
     * @var
     */
    protected $commerce;

    /**
     * @var
     */
    protected $commission;

    /**
     * Constructeur
     * @param $commerce
     * @param $commission
     */
    public function __construct($commerce, $commission)
    {
        $this->commerce = $commerce;
        $this->commission = $commission;
    }



    /**
     * @param mixed $commerce
     */
    public function setCommerce($commerce)
    {
        $this->commerce = $commerce;
    }

    /**
     * @return mixed
     */
    public function getCommerce()
    {
        return $this->commerce;
    }

    /**
     * @param mixed $commission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

    /**
     * @return mixed
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param \Application\connexion $connexion
     */
    public function setConnexion($connexion)
    {
        $this->connexion = $connexion;
    }

    /**
     * @return \Application\connexion
     */
    public function getConnexion()
    {
        return $this->connexion;
    }



}
