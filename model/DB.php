<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
function getconnection(){
    
$connection=mysqli_connect("localhost","root","syaka1997","Employe");
return $connection;
}

function executeSQL($sql){
    $connction= mysqli_query(getconnection(),$sql);
    return  $connction;
}
if(!getconnection()){
    die("connection à la base".mysqli_error_connect() );

}

?>


