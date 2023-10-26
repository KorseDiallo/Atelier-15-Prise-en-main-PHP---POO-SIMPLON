<?php 
require_once "Professeur.php";
class Evaluation{
    private $nom;
    private $infoProfesseur;
    private $dateEvaluation;
    private $dure;


    public function __construct($nom,$infoProfesseur,$dateEvaluation,$dure)
    {
        $this->setNom($nom);
        $this->setInfoProfesseur($infoProfesseur);
        $this->setDateEvaluation($dateEvaluation);
        $this->setDure($dure);
    }

    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        if(is_string($nom) && strlen($nom)<=25){
            $this->nom=$nom;
        }else{
            throw new Exception("le nom n'est pas valide. Nb: le nom doit être inferieur ou égal à 25 caractères");
        }
       
    }

    public function getInfoProfesseur(){
        return $this->infoProfesseur;
    }
    public function setInfoProfesseur($infoProfesseur){
        if(is_string($infoProfesseur) && strlen($infoProfesseur)<=25){
            $this->infoProfesseur=$infoProfesseur;
        }else{
            throw new Exception("le prenom n'est pas valide.");
        }
       
    }

    public function getDateEvaluation(){
        
        return $this->dateEvaluation;
    }
    public function setDateEvaluation($dateEvaluation){
        $pattern="/^\d{4}-\d{2}-\d{2}$/";
        if(preg_match($pattern,$dateEvaluation)==1){
            $this->dateEvaluation=$dateEvaluation;
        }else{
            throw new Exception("la date n'est pas valide");
        }
       
    }

    public function getDure(){
        return $this->dure;
    }
    public function setDure($dure){
        if(is_numeric($dure)&& $dure>0){
            $this->dure=$dure;
        }else{
            throw new Exception("la durée doit être un nombre positif");
        }
       
    }

    public function evaluation(){
        echo "Evaluation en: $this->nom dure: $this->dure H";
        echo " fait par: $this->infoProfesseur à la date du: $this->dateEvaluation";
    }
}

        
    $infopro = $professeur1->getNom() . ' ' . $professeur1->getPrenom();
    $evaluation = new Evaluation("Gestion de projet",$infopro,"2023-12-04",3);
    $evaluation->evaluation();
?>

