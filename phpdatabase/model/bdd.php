<?php

class Bdd
{
    public static function connexion()
    {
        try {
            $host = '51.158.59.186:14301';
        $db   = 'Rw';
        $user = 'phppex';
        $pass = 'Supermotdepasse!42';

        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
           return $pdo;
        } catch (Exception $e) {
            return $e->getMessage();

        }
    }

}

$bdd = Bdd::connexion();