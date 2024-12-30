<?php
    include 'Utilisateur.php';

    class Administrateur extends Utilisateur{
        private $role;

        public function __construct($nom , $email , $role)
        {
            parent::__construct($nom , $email);
            $this->role = $role;
        }

        public function getRole()
        {
            return $this->role;
        }

        public function setRole($role)
        {
            $this->role = $role;
        }

        public function afficherRole()
        {
            echo $this->role;
        }
        public function suprimmerArticle($article)
        {
            echo "Article ete supprimer";
        }
    }

?>