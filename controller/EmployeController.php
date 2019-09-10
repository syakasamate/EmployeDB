<?php
$message="";
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once'../model/DB.php';
require_once'../model/EmployeDB.php';
if(isset($_POST['Enregistre']) && isset($_POST['nomEMP']) && isset($_POST['prenomEMP'])&& isset($_POST['dateNais'])
&& isset($_POST['salaireEMP']) && isset($_POST['telEMP']) && isset($_POST['emailEMP'])){
if(!empty($_POST['nomEMP'])&& !empty($_POST['prenomEMP'])&& !empty($_POST['dateNais'])&& !empty($_POST['salaireEMP'])&&
!empty($_POST['telEMP'])&& !empty($_POST['emailEMP'])){
        $matricule=$_POST['matriculeEMP'];
        $nom=$_POST['nomEMP'];
        $prenom=$_POST['prenomEMP'];
        $date=$_POST['dateNais'];
        $salaire=$_POST['salaireEMP'];
        $tel=$_POST['telEMP'];
        $email=$_POST['emailEMP'];
                if(validetel($tel)==true){
                if(validesalaire($salaire)==true){
                if(emailvalid($email)==true){
                    if( validedate($date)==true){
    addEmploye($matricule,$nom,$prenom,$date,$salaire,$tel,$email);
    $base_url="http://localhost/EmployeBD/";
    header("Location:$base_url?page=liste");
                    }else{
                        $base_url="http://localhost/EmployeBD/";
                       header("Location:$base_url?page=liste");
                    }
            }  else{
                $base_url="http://localhost/EmployeBD/";
                header("Location:$base_url?page=liste");
                
            }  
        }
        else{
            $base_url="http://localhost/EmployeBD/";
            header("Location:$base_url?page=liste");
            
        }  
        }  else{
            $base_url="http://localhost/EmployeBD/";
            header("Location:$base_url?page=liste");
            
        }  
    }
    else{
        $vide="ereur";
        $base_url="http://localhost/EmployeBD/";
       header("Location:$base_url?page=add");
       
    }
    }

if(isset($_GET['id'])){
    deleteEmploye($_GET['id']);
    $base_url="http://localhost/EmployeBD/";
    header("Location:$base_url?page=liste");
}

if(isset($_POST['Modifier'])){  
    if(!empty($_POST['nomEMP'])&& !empty($_POST['prenomEMP'])&& !empty($_POST['dateNais'])&& !empty($_POST['salaireEMP'])&&
    !empty($_POST['telEMP'])&& !empty($_POST['emailEMP'])){
     $matricule=$_POST['matricule'];
     $nom=$_POST['nomEMP'];
     $prenom=$_POST['prenomEMP'];
     $date=$_POST['dateNais'];
     $salaire=$_POST['salaireEMP'];
     $tel=$_POST['telEMP'];
     $email=$_POST['emailEMP'];
     if(validesalaire($salaire)==true){
      if(validetel($tel)==true){
     if(emailvalid($email)==true){
    if( validedate($date)==true){
     updateEmploye($matricule,$nom,$prenom,$date,$salaire,$tel,$email);
    $base_url="http://localhost/EmployeBD/";
     header("Location:$base_url?page=liste");
     $message="modification réussi";
    }else{
        $base_url="http://localhost/EmployeBD/";
        header("Location:$base_url?page=liste"); 
    }
     }else{
        $base_url="http://localhost/EmployeBD/";
        header("Location:$base_url?page=liste"); 
     }
     }else{
        $base_url="http://localhost/EmployeBD/";
        header("Location:$base_url?page=liste"); 
     }
     } else{
        $base_url="http://localhost/EmployeBD/";
        header("Location:$base_url?page=liste"); 
     }
}else{
    $base_url="http://localhost/EmployeBD/";
    header("Location:$base_url?page=liste"); 
    $message="modification echoueé";
}
}

?>