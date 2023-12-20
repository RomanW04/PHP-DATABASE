<?php
include_once('bdd.php');

class UsersModel
{

    private $bdd;

    public function __construct()
    {
        $this->bdd=Bdd::connexion();
    }

    public function getUsers()
    {
        return $this->bdd->query("SELECT * FROM info")->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getUserByEmail($email)
    {
        return $this->bdd->query("SELECT * FROM info WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);

    }

    public function setUser($nom,$prenom,$tel,$email,$mdp)
    {
        $setUser=$this->bdd->prepare("INSERT INTO info(nom,prénom,téléphone,email,mdp) VALUES(?,?,?,?,?)");
        return $setUser->execute([$nom,$prenom,$tel,$email,$mdp]);
        
    }


}


 