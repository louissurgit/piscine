<?php
require('repository/userRepository.php');

if(isset($_SESSION['connected'])&&$_SESSION['connected']){
    if($_SESSION['currentUser']['role']=="user"){   
        require('templates/compte.php');
    }elseif($_SESSION['currentUser']['role']=="admin"){
        require('templates/admin.php');
    }else{
        require('templates/coach.php');
    }
}elseif(isset($_SESSION['connected'])&&!($_SESSION['connected'])){
    session_unset();
    require('templates/home.php');
}else{
    if(isset($_POST['mail'])&&isset($_POST['password'])){
        $mail=$_POST['mail'];
        $password=$_POST['password'];
        $repo = new UserRepository();
        $result=$repo->getUserByMail($mail,$password);
        if($result!=null){
            $_SESSION['connected']=true;
            $_SESSION['currentUser']=$result;
            if($result['role']=='user'){
                require('templates/compte.php');
            }else{
                require('templates/admin.php');
            }
        }else{
            $resultCoach=$repo->getCoachByMail($mail,$password);
            if($resultCoach!=null){
                $_SESSION['connected']=true;
                $_SESSION['currentUser']=$resultCoach;
                require('templates/coach.php');
            }else{
                echo("<script> alert('Combinaison e-mail mot de passe inexistante')</script>");
                require('templates/home.php');
            }
           
        }
    }else{
        require('templates/login.php');

    }
}

?>