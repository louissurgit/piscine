<?php

require('src/repository/userRepository.php');


class UserController{

    public function addUser(){
        if(isset($_POST['mail'])&&$_POST['password']&&$_POST['prenom']&&$_POST['nom']){
            $mail=$_POST['mail'];
            $password=$_POST['password'];
            $prenom=$_POST['prenom'];
            $nom=$_POST['nom'];
            $phone=$_POST['telephone'];
            if(isset($_POST['adresse'])){
                $adresse=$_POST['adresse'];
            }else{
                $adresse='';
            }
            if(isset($_POST['pays'])){
                $pays=$_POST['pays'];
            }else{
                $pays='';
            }
            if(isset($_POST['cp'])){
                $cp=$_POST['cp'];
            }else{
                $cp='';
            }
            if(isset($_POST['carteId'])){
                $carteId=$_POST['carteId'];
            }else{
                $carteId='';
            }
            if(isset($_POST['ville'])){
                $ville=$_POST['ville'];
            }else{
                $ville='';
            }
        
            $repo = new UserRepository();
            $result=$repo->createUser($prenom,$nom,$mail,$password,$phone,$adresse,$cp,$ville,$carteId,$pays);
            if($result){
                echo("<script> alert('Votre compte a été créé, veuillez vous connecter')</script>");
                require('templates/login.php');
            }else{
                    echo("<script> alert('Il y a eu un probleme lors de la création de votre compte')</script>");
                    require('templates/home.php');
                }
        }
    }

}
?>