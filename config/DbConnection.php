<?php

//va remplacer le fichier pdo.php

class Dbconnection
{
    const DSN = 'mysql:host=localhost;dbname=voitures;port=3306';
    const USER = 'root';
    const PASSWORD = '';
    static ?PDO $pdo = null;

    public static function getPdo(): PDO
    {
        // si pdo existe et a déjà été rempli avec le new PDO on le retourne directement pour éviter
        // d'enregistrer x pdo et ouvrir x connexion à notre bdd
        if (self::$pdo !== null) {
            return self::$pdo;
        }
        self::$pdo = new PDO(self::DSN, self::USER, self::PASSWORD);
        return self::$pdo;

    }
}