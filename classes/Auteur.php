<?php
    include 'Utilisateur.php';
    include 'Article.php';

    class Auteur extends Utilisateur{
        private $biographie;

        public function __construct($nom , $email = null , $biographie = null)
        {
            parent::__construct($nom , $email);
            $this->biographie = $biographie;
        }

        public function getBiographie()
        {
            return $this->biographie;
        }

        public function setBiographie($biographie)
        {
            $this->biographie = $biographie;
        }

        public function afficherAuteur()
        {
            echo $this->nom . $this->email . $this->biographie;
        }
        
        public function creerArticle($titre,$contenu)
        {
            $article = new Articl($titre ,$contenu);
        }
    }
?>