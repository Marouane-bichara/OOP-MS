<?php

    class Utilisateur{
        protected $nom;
        protected $email;

        public function __construct($nom , $email)
        {
            $this->nom = $nom;
            $this->email = $email;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function setNome($nom)
        {
            $this->nom =$nom;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email =$email;
        }

        public function afficherDetails()
        {
            echo $this->nom ."<br>". $this->email;
        }

    }
?>