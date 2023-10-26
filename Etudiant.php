<?php 
    
    class Etudiant{
        protected $nom;
        protected $prenom;
        protected $matricule;
        protected $dateNaissance;

        public function __construct($nom,$prenom,$matricule,$dateNaissance){
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setMatricule($matricule);
            $this->setDateNaissance($dateNaissance);
        }

        public function getNom(){
           
            return $this->nom;
        }
        public function setNom($nom){
            $pattern='/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/';
            if(preg_match($pattern,$nom)==1 && strlen($nom)<=25){
                return $this->nom=$nom;
            }else{
                throw new Exception("le nom est invalid ou le nom est superieur est 25 caractère");
            }
            
        }

        public function getPrenom(){
            return $this->prenom;
        }
        public function setPrenom($prenom){
            $pattern='/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/';
            if(preg_match($pattern,$prenom)==1 && strlen($prenom)<=25){
                return $this->prenom=$prenom;
            }else{
                throw new Exception("le prenom est invalid ou le prenom est superieur est 25 caractère");
            }
            
        }

        public function getMatricule(){
            return $this->matricule;
        }
        public function setMatricule($matricule){
            $pattern='/^[a-zA-Z0-9ä-ÿÄ-Ÿ\s]*$/';
            if(preg_match($pattern,$matricule)==1 && strlen($matricule)<=10){
                return $this->matricule=$matricule;
            }else{
                throw new Exception("le matricule est invalid ou le matricule est superieur est 25 caractère");
            }
           
        }

        public function getDateNaissance(){
            return $this->dateNaissance;
        }
        public function setDateNaissance($dateNaissance){
            $pattern='/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/';
            if(preg_match($pattern,$dateNaissance)==1){
                return $this->dateNaissance=$dateNaissance;
            }else{
                throw new Exception("la date de naissance n'est pas valide");
            }
            
        }

        public function Presenter(){
            echo "Bonjour mon c'est $this->nom $this->prenom je suis née le $this->dateNaissance et mon matricule c'est le $this->matricule <br>";
        }
        public function faireCour(){
            echo "Je fais un cour de Gestion de Projet <br>";
        }
        public function faireEValuation(){
            echo "je fais une evaluation en Gestion de projet <br>";
        }
    }


    $etudiant= new Etudiant("Diallo","Abdoulaye ","DA123","1999-08-11");
    $etudiant->Presenter();
    echo "------------------- <br>";
    $etudiant->faireCour();
    echo "------------------- <br>";
    $etudiant->faireEValuation();
?>