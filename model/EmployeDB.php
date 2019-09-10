
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once'DB.php';

function addEmploye($matricule,$nomE,$prenomE,$dateN,$alaireE,$telE,$emailE){
    $sql="INSERT INTO employe (matriculeEmp, nomEmp, prenomEmp,dateNais,salaireEmp,telEmp,emailEmp)
     VALUES ('$matricule','$nomE','$prenomE','$dateN','$alaireE','$telE','$emailE')";
    return executeSQL($sql);


}
function updateEmploye($matricule,$nomE,$prenomE,$dateN,$salaireE,$telE,$emailE){
   $sql="UPDATE  employe SET  
                nomEmp='$nomE',
                prenomEmp='$prenomE',
                dateNais='$dateN',
                salaireEmp='$salaireE',
                telEmp='$telE',
                emailEmp='$emailE'
   WHERE matriculeEmp='$matricule'";
   return executeSQL($sql);
}

function  deleteEmploye($matricule){
    $sql="DELETE FROM employe WHERE matriculeEmp='$matricule'";

    return executeSQL($sql);
}

function listeEmploye(){
    $sql="SELECT * FROM employe ";
    return executeSQL($sql);
}
function getEmployeById($matricule){
    $sql="SELECT * FROM employe WHERE matriculeEMP='$matricule'";
    return executeSQL($sql);
}
function recherche($recherche){
    $sql="SELECT * FROM employe WHERE    nomEmp LIKE '%$recherche%'";
    return executeSQL($sql);
}


function validetel($tel){
    if( preg_match('/^(77|78|70|76)[0-9]{7}$/',$tel)){
       
   }else{
      return false;
   }
   return true;

}
function validesalaire($salaire) {
        if($salaire>=25000 && $salaire<=2000000){
            return true;
        
        }else{
            return false;
        } 
    }
    function emailvalid($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }else{
            return false;
        }
    }
    function validedate($date){
        $tabledate=explode("/",$date);
        if(!checkdate($tabledate[1],$tabledate[0],$tabledate[2])){
            return false;    
       }else{
        return true;
    }
    }
?>