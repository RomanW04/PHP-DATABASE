<?php
include_once('bdd.php');

class ArticlesModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function getArticles()
    {
        return $this->bdd->query("SELECT * FROM produit")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($id)
    {
        return $this->bdd->query("SELECT * FROM produit WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    }


    public function getArticles2()
    {
        return $this->bdd->query("SELECT * FROM produit2")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById2($id)
    {
        return $this->bdd->query("SELECT * FROM produit2 WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    }

}
