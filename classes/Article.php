<?php
    include 'Auteur.php';
    class Articl{
        private $titre;
        private $contenu;
        private $datePublication;
        private $auteur;


        public function __construct($titre , $contenu , $datePublication = null,$auteur = null)
        {
            $this->titre = $titre;
            $this->contenu = $contenu; 
            $this->datePublication = $datePublication;
            $this->auteur = new Auteur($auteur);
        }

        public function getTitre()
        {
            return $this->titre;
        }
        public function setTitre($titre)
        {
            $this->titre = $titre;
        }


        
        public function getContenu()
        {
            return $this->contenu;
        }
        public function setContenu($contenu)
        {
            $this->contenu = $contenu;
        }
        

                
        public function getDatePublication()
        {
            return $this->datePublication;
        }
        public function setDatePublication($datePublication)
        {
            $this->datePublication = $datePublication;
        }


        public function getDateAuteur()
        {
            return $this->auteur;
        }
        public function setAuteur($auteur)
        {
            $this->auteur = $auteur;
        }

        
        public function afficherArticles()
        {
            echo $this->titre . $this->contenu . $this->datePublication. $this->auteur;
        }
    }
?>