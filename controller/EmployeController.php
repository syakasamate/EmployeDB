
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/sup.css">
    <title>Document</title>
</head>
<body style="margin-left:40%">
  
<form action="EmployeController.php"  method="post" style="background-color:slateblue ;width:50%; margin-top:20%;" >
<h4 style="color:white"> voulez-vous vraiment supprimer l'employe <?=  $_GET['matricule']?>? </h4>
         <input type="hidden"  name="code" value="<?php if(isset($_GET['matricule'])) echo $_GET['matricule']?>" >
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="oui" value="OUI">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" name="non" value="NON" style="">
    </form> 
</body>
</html>
<?php
$message="";
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once'../model/DB.php';
require_once'../model/EmployeDB.php';
 if(isset($_POST['oui'])){
 if(isset($_POST['code'])){
 $mat=$_POST['code']; 
 deleteEmploye($mat);
 $base_url="http://localhost/EmployeBD/";
 header("Location:$base_url?page=liste");
 }
}
if(isset($_POST['non'])){
    $base_url="http://localhost/EmployeBD/";
  header("Location:$base_url?page=liste");

}

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
