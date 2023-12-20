<?php

$page = $_GET['page'];

if ($page == '') {
    include('view/accueil.php');
} elseif ($page == 'contact') {
    include('view/contact.php');
} elseif ($page == 'getContact') {
    include('view/getContact.php');
} 

elseif ($page == 'produit') {
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticles();
} 


elseif ($page == 'inscription') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->setUser();
} 

elseif ($page == 'authentification') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->getAuthentification();
}
elseif($page== 'p1'){
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticlesp1();
}

elseif($page== 'p2'){
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticlesp2();
}

elseif($page== 'p3'){
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticlesp3();
}

elseif($page== 'p4'){
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticlesp4();
}

elseif ($page == 'exit') {
    $_SESSION=array();
}
else {
    echo 'page introuvable';
}

