<?php
    define('ENABLE_CONNEXION',true);
    //Paramètres de la base de données
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'myhotel');
    //
    define('PORT', ':8080');
    //Répértoire racine
    define('APPROOT', dirname(dirname(__FILE__))); // : pour acceder au dossier app
    //URL Racine
    define('URLROOT','http://localhost'.PORT.'/MyHotel');//pour acceder au dossier public
    //Nom du site
    define('SITENAME','GESTION HOTEL');
    //Repertoire des photo de profil
    define('URLPHOTO',$_SERVER['DOCUMENT_ROOT']."/MyHotel/public/img/");
    //Repertoire des docments
    define('URLDOCUMENT',$_SERVER['DOCUMENT_ROOT']."/MyHotel/public/documents/");
    //Titre
    define('TITRE_APP','GESTION HOTEL');
    //Adresse & TEL APP
    define('ADRESSE','');
    define('TELEPHONES','Tel: ');
    define('ADRESSE_COMPLET','');

  