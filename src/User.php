<?php

namespace App;

class User
{
    protected $name;
    protected $email;
    
    public function __construct()
    {
        echo 'User class has been initiated' . PHP_EOL;
    }

    public function __destruct()
    {
        echo 'User class has been destroyed' . PHP_EOL;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}