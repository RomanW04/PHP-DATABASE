<?php
include_once('model\articlesModel.php');

class ArticlesController
{

    private $model;
    public function __construct()
    {
        $this->model = new ArticlesModel;
    }

    public function getArticles()
    {
        $articles=$this->model->getArticles();
        include_once('view\produit.php');
    }
   

    public function getArticlesp1()
    {
        $articles=$this->model->getArticles2();
        include_once('view/p1.php');
    }

    public function getArticlesp2()
    {
        $articles=$this->model->getArticles2();
        include_once('view/p2.php');
    }



    public function getArticlesp3()
    {
        $articles=$this->model->getArticles2();
        include_once('view/p3.php');
    }



    public function getArticlesp4()
    {
        $articles=$this->model->getArticles2();
        include_once('view/p4.php');
    }


}

