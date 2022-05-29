<?php
//marche pour coach aussi
require('src/repository/userRepository.php');


class CoachController{
    public function getOneCoachBySpecialite($specialite){
        $repo = new UserRepository();
        $result=$repo->getOneCoachBySpecialite($specialite);
        return $result;

    }
    public function addCoach(){
        if(isset($_POST['mail'],$_POST['password'],$_POST['prenom'],$_POST['nom'])){
            $mail=$_POST['mail'];
            $password=$_POST['password'];
            $prenom=$_POST['prenom'];
            $nom=$_POST['nom'];
            $phone=$_POST['telephone'];
            $role=$_POST['role'];
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
            if(isset($_POST['specialites'])){
                $specialites=$_POST['specialites'];
            }else{
                $specialites='';
            }
            if(isset($_POST['skype'])){
                $skype=$_POST['skype'];
            }else{
                $skype='';
            }
            
            if(!empty($_FILES["photo"]["tmp_name"])){     
                $photo=file_get_contents($_FILES["photo"]["tmp_name"]);
                $photo=addslashes($photo);
            }else{
                $photo='';
            }
            $repo = new UserRepository();
            $result=$repo->createCoach($prenom,$nom,$mail,$password,$phone,$adresse,$cp,$ville,$carteId,$pays,$skype,$specialites,$role,$photo);
            if($result){
                echo("<script> alert('Le compte professionel à bien été ajouté')</script>");
                require('src/templates/home.php');
            }else{
                    echo("<script> alert('Il y a eu un probleme lors de la création de votre compte')</script>");
                    require('src/templates/home.php');
                }
        }
    }

}
?>