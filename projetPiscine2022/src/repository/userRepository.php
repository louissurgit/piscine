<?php
    require('src/database.php');

    class UserRepository extends Database{
        
        // User

        public function getUserByMail($mail,$password){
            $connection=self::getConnection();
            $result = self::createQuery("SELECT * FROM user WHERE mail="."'".$mail."'"." AND password="."'".$password."'",$connection);
            return mysqli_fetch_array($result);
        }

        public function createUser($prenom,$nom,$mail,$password,$phone,$adresse,$cp,$ville,$idCarte,$pays){
            $connection=self::getConnection();
            return self::createQuery("INSERT INTO `user` (`role`, `mail`, `nom`, `prenom`, `adresse1`, `ville`, `cp`, `pays`, `phone`, `idCarteEtudiant`, `password`) 
            VALUES ('user', "."'".$mail."'".", "."'".$nom."'".", "."'".$prenom."'".", "."'".$adresse."'".", "."'".$ville."'".", "."'".$cp."'".", "."'".$pays."'".", "."'".
            $phone."'".", "."'".$idCarte."'".", "."'".$password."'".")
            ",$connection);
        }

        // Coach


        public function getOneCoachBySpecialite($specialite){

            
            $connection=self::getConnection();
            $result = self::createQuery("SELECT prenom, nom,mail, skype, photo, specialites, phone FROM `coach` WHERE specialites="."'".$specialite."' LIMIT 1",$connection);
            $resultArray= mysqli_fetch_array($result);
            $base64 = base64_encode($resultArray['photo']);
            $resultArray['photo']=$base64;
            return $resultArray;
        }


        public function getCoachByMail($mail,$password){

            
            $connection=self::getConnection();
            $result = self::createQuery("SELECT * FROM `coach` WHERE mail="."'".$mail."'"." AND password="."'".$password."'",$connection);
            $resultArray= mysqli_fetch_array($result);
           
            $base64 = base64_encode($resultArray['photo']);
            $resultArray['photo']=$base64;
            return $resultArray;
        }

        public function createCoach($prenom,$nom,$mail,$password,$phone,$adresse,$cp,$ville,$idCarte,$pays,$skype,$specialites,$role,$photo){
            $connection=self::getConnection();
            return self::createQuery("INSERT INTO `coach` (`role`, `mail`, `nom`, `prenom`, `adresse`, `ville`, `cp`, `pays`, `phone`, `skype`, `specialites`, `password`, `photo`) 
            VALUES ("."'".$role."'".", "."'".$mail."'".", "."'".$nom."'".", "."'".$prenom."'".", "."'".$adresse."'".", "."'".$ville."'".", "."'".$cp."'".", "."'".$pays."'".", "."'".
            $phone."'".", "."'".$skype."'".", "."'".$specialites."'".", "."'".$password."'".", "."'".$photo."'".")
            ",$connection);
        }


    }
?>