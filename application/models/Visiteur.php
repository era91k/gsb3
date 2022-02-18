<?php

class Visiteur extends CI_Model {

    //Attributs privés
    private $id;
    private $nom;
    private $prenom;
    private $login;
    private $mdp;
    private $adresse;
    private $cp;
    private $ville;

    function getId(){
        return $this->id;
    }

    function setId($unId){
        $this->id = $unId;
    }

    function getNom(){
        return $this->nom;
    }

    function setNom($unNom){
        $this->nom = $unNom;
    }

    function getPrenom(){
        return $this->prenom;
    }

    function setPrenom($unPrenom){
        $this->prenom = $unPrenom;
    }

    function getLogin(){
        return $this->login;
    }

    function setLogin($unLogin){
        $this->login = $unLogin;
    }

    function getMdp(){
        return $this->mdp;
    }

    function setMdp($unMdp){
        $this->mdp = $unMdp;
    }

    function getAdresse(){
        return $this->adresse;
    }

    function setAdresse($unAdresse){
        $this->adresse = $unAdresse;
    }

    function getCp(){
        return $this->cp;
    }

    function setCp($unCp){
        $this->cp = $unCp;
    }

    function getVille(){
        return $this->ville;
    }

    function setVille($uneVille){
        $this->ville = $uneVille;
    }

    function seConnect($login, $mdp){
        $mdpC = sha1($mdp);
        var_dump($mdpC);
        $this->db->where('login', $login);
        $this->db->where('mdp', $mdpC);
        $result = $this->db->count_all_results('visiteur');
        if ($result == 1) {
            $rep = true;
        } else {
            $rep = false;
        }
        return $rep;
    }

    function getVisiteurByLogin($login){
        return $this->db
                    ->select('*')
                    ->from('visiteur')
                    ->where('login', $login)
                    ->get()
                    ->first_row();
    }

    function connectUser($login, $mdp){
        $visiteur = $this->getVisiteurByLogin($login);
        if (($visiteur != NULL) && password_verify($mdp, $visiteur->mdp)) {
            echo 'lol';
        }
    }


}
?>