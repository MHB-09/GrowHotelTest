<?php

class HomeCtrl extends Controller
{
    public function __construct(){
        $this->utilisateurModel = $this->model('Utilisateur');
        //$this->parametresModel = $this->model('Parametres');
        //  $this->historiqueModel = $this->model('Historique');
    }

    public function index(){
        if(isset( $_SESSION['isConnected']) && $_SESSION['isConnected']){
            $data = [
                //"historiques" => $this->historiqueModel->getHistoriqueByUser( $_SESSION['connectedUser']->idUtilisateur)
            ];
            $this->view('home/'.__FUNCTION__,$data);
        }else{
            $this->redirectToMethod('Home','connexionLog');
        }
    }
    public function connexionLog(){
        $this->view('Home/connexionLog');
    }

    public function connexion($login=''){
        
        
        if(isset( $_SESSION['isConnected']) && $_SESSION['isConnected']){
            $this->redirectToMethod('Home','index');
        }else{
            if (empty($login)){
                $this->view('home/'.__FUNCTION__,['message'=>'']);
            }else{
                $form = getForm($_POST);
                extract($form);
                $user = $this->utilisateurModel->findUser($login,$password);
                //$roles = $this->roleModel->getAllByEtat();
                if ($user){
                    if ($user->etatUtilisateur!=0){
                        $_SESSION['nomPersonne'] = $user;
                        $_SESSION['connectedUser'] = $user;
                        //$_SESSION['roles']    = $roles;
                        $_SESSION['isConnected'] = true;
                      
                       
                       // $_SESSION['firstConnection'] = ($user->firstConnection == 0 ? false : true);
                       
                        $_SESSION['isVerified']    = true;
                        $this->redirectToMethod('Home','index');
                       
                    }else{
                        $this->view('home/'.__FUNCTION__,['message'=>'Vous êtes bloqué par l\'Administrateur !']);
                    }
                }else{
                    $this->view('home/'.__FUNCTION__,['message'=>'Verifier vos informations!']);
                }
            }
        }
       
    }

    public function erreurRole(){
        $this->view('home/'.__FUNCTION__,[]);
    }

    public function deconnexion(){
       
        unset($_SESSION['connectedUser']);
        unset($_SESSION['usersRoles']);
        session_destroy();
        $this->redirectToMethod('Home','connexionLog');
    }

  

    public function changePassword(){
        if(isset( $_SESSION['isConnected']) && $_SESSION['isConnected']){
            $this->redirectToMethod('home','index');
        }
        else
        {
            $form = getForm();
            extract($form);
            if ($password2 == $password3){
                if(strlen($password2) >= 8){
                    //Update password
                    if($this->utilisateurModel->changePass($_SESSION['connectedUser']->idUtilisateur,"passer",$password2)==1){
                        $_SESSION['firstConnection'] = true;
                        $_SESSION['isConnected']    = true;
                        $this->redirectToMethod('Home','index');
                    }else
                    {
                        $data = [
                            "message" => "Impossible de modifier le mot de passe !"
                        ];
                        $this->view('home/password',$data);
                    } 
                }
                else{
                    $data = [
                        "message" => "8 caractéres requis !"
                    ];
                    $this->view('home/password',$data);
                }
            }else{
                $data = [
                    "message" => "Les deux mots de passe doivent être identiques !"
                ];
                $this->view('home/password',$data);
            }
        }
    }

    public function profil(){
        if(isset( $_SESSION['isConnected']) && $_SESSION['isConnected']){
            $data = [
                "user" =>  $_SESSION['connectedUser']
            ];
            $this->view('home/'.__FUNCTION__,$data);
        }else{
            $this->redirectToMethod('Home','connexion');
        }
    }
   
}