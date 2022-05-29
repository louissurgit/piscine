<?php 

if(isset($_GET['action']) && $_GET['action']!=null ){
    $action = $_GET['action'];
   
    switch ($action){
        case "compte":
            require("connexion.php");
            break;
        case "recherche":
            require("templates/recherche.php");
            break;
        case "rdv":
            require("templates/rdv.php");
            break;
        case "inscription":
            require("templates/inscription.php");
            break;
        case "login":
            require("connexion.php");
            break;
        case "activite":
            require("templates/parcourir.php");
            require('templates/activite.php');
            break;
        case "sport":
            require("templates/parcourir.php");
            require('templates/sport.php');
            break;
        case "salle":
            require("templates/parcourir.php");
            require('templates/salle.php');
            break;
        case "parcourir":
            require("templates/parcourir.php");
            require("templates/container.php");
            break;
        case "creationUser":
            require("controller/userController.php");
            $userController=new UserController();
            $userController->addUser();
            break;
        case "deconnexion":
            $_SESSION['connected']=false;
            require("connexion.php");
            break;
        case "creationCoach":
            require("controller/coachController.php");
            $coachController=new CoachController();
            $coachController->addCoach();
            break;
        default :
            require("templates/home.php");
            break;
    }
}else{
    require("src/templates/home.php");
}





?>