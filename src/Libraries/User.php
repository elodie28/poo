<?php

namespace Libraries;

/**
 * Class User
 * @package Libraries
 */
class User {


    /**
     * @var $email
     */
    protected $email;

    /**
     * @var $password
     */
    protected $password;


    /**
     * Constructeur
     * @param $email
     * @param $password
     */
    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }


    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

}

?>