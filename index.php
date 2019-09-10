<link rel="stylesheet" href="style/js.css">

<?php
if(isset($_GET[page])){
    require_once'menu.php';    
    switch($_GET[page]){
 case 'add':
        require_once'model/DB.php';
        require_once'model/EmployeDB.php';
        $query =("SELECT COUNT(*) FROM employe");
            $res=executeSQL($query);
            $row = mysqli_fetch_row($res);
            $total=$row[0]+1; 
            $r = sprintf("%05d",$total) ;
        require_once'view/employe/add.php';
        break;
case 'edit':
        require_once'model/DB.php';
        require_once'model/EmployeDB.php';
        $employe=getEmployeById($_GET['id']);
        $ligne=mysqli_fetch_row($employe);
        require_once'view/employe/edit.php';
        break;
case 'delit':
        require_once'view/employe/delite.php';
        break;
case 'liste':
         error_reporting(E_ALL);
        ini_set("display_errors", 1);
        require_once'model/DB.php';
        require_once'model/EmployeDB.php';
       $liste=listeEmploye();
       if(isset($_GET['recherche'])){
           $liste=recherche($_GET['recherche']);
       }
        require_once'view/employe/liste.php';
        break;

      }
}else{
   require_once'menu.php';
  
}


?>
 