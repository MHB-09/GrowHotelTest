<?php

class Role
{
    public static function getAccessibleMethods(){
        $access = isset($_SESSION['connectedUser']) ? $_SESSION['connectedUser']->accessibilite : '';
        $tabAccess = explode(",",$access);
        return $tabAccess;
    }

    public static function getRole(){
        return $_SESSION['connectedUser']->libelleRole;
    }


    public static function privateMethode($method){
        if (!self::isLogged()){
            header("location:Home/connexion");
        }else{
            $access = $_SESSION['connectedUser']->accessibilite;
            $tabAccess = explode(",",$access);

        }
    }
    public static function accessiblePar($role,$admin=''){
        if(!self::isLogged()){
            header("location:Home/connexion");
        }else{
            if ($admin == "administrateur" && !(strtolower(Role::getRole())=="administrateur")) {
                redirectToPage('Home','index');
            }
            if(!(strtolower(Role::getRole())==$role || strtolower(Role::getRole())=="administrateur" || strtolower(Role::getRole())=="superviseur"))
            {
                redirectToPage('Home','index');
            }
            
        }
    }
    public static function isLogged(){
        return isset($_SESSION['connectedUser']->idTypePersonneF);
    }

    public static function isVerified(){
        return $_SESSION['isVerified'];
    }
    public static function passwordChanged(){
      
        return $_SESSION['firstConnection'];
    }
    public static function isConnected(){
        if(isset($_SESSION['isConnected']))
            return $_SESSION['isConnected'];
        else
        return false;
    }
    
    public  static function nomComplet(){
        return self::isLogged() ? $_SESSION['connectedUser']->prenomPersonne." ".$_SESSION['connectedUser']->nomPersonne : "";
    }
}