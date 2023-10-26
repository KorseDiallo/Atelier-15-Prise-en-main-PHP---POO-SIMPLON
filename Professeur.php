<?php 
    require_once "Etudiant.php";
    require_once "Iprofesseur.php";
    class Professeur extends Etudiant implements Iprofesseur{
        private $voiture;
        private $salaire;
        private $specialite;

        public function __construct($nom,$prenom,$matricule,$dateNaissance,$voiture,$salaire,$specialite){
                parent::__construct($nom,$prenom,$matricule,$dateNaissance);
                $this->voiture=$voiture;
                $this->salaire=$salaire;
                $this->specialite=$specialite;
        }

        public function getVoiture(){
            return $this->voiture;
        }
        public function setVoiture($voiture){
            return $this->voiture=$voiture;
        }

        public function getSalaire(){
            return $this->salaire;
        }
        public function setSalaire($salaire){
            return $this->salaire=$salaire;
        }

        public function getSpecialite(){
            return $this->specialite;
        }
        public function setSpecialite($specialite){
            return $this->specialite=$specialite;
        }

        public function Presenter() {
            echo "Salut, je suis professeur, je m'appelle $this->nom $this->prenom. Je suis Formateur à Simplon  matricule $this->matricule.";
            echo "Je suis spécialisé en $this->specialite, je gagne $this->salaire et";
            if ($this->voiture) {
                echo " j'ai une voiture.";
            } else {
                echo " je n'ai pas de voiture.";
            }
            echo "<br>";
        }
        

        public function EvaluerEtudiant($dateEvaluation){
            $pattern='/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/';
            if(preg_match($pattern,$dateEvaluation)==1){
                echo "j'ai evalué mes Etudiants en gestion de projet le $dateEvaluation <br>";
            }else{
                throw new Exception("la date de naissance n'est pas valide");
            }
           
        }


    }

    $professeur1= new Professeur("Diallo","Ibrahima","PRBI10","1992-10-11",true,500000,"Full-Stack");

    $professeur1->Presenter();
    echo "---------------------------------------------------------------------------<br>";
    $professeur1->EvaluerEtudiant("2023-07-06");

    echo "---------------------------------------------------------------------------<br>";

    $professeur2= new Professeur("Diallo","Saidou","PRDS1010","1997-10-11",false,300000,"Full-Stack");

    $professeur2->Presenter();
    echo "---------------------------------------------------------------------------<br>";
    $professeur2->EvaluerEtudiant("2023-10-25");

?>