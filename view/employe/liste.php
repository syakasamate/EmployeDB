
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/fontawesome-free-5.10.1-web/css/all.css">
</head>
<body>
     <div style="margin-left:780px;width:500px;margin-top:10px;margin-bottom:30px;" >
      <form action="" method="get">
      <div class="input-group">
      <input type="hidden" name="page" value="liste">
       <input type="text" name="recherche"  id="btn-input" class="form-control input-sm-4 fas fa-search"placeholder="saisir le nom  de l'employe à rechercher" >
       <span class="input-group-btn">
       <input type="submit" id="btn-chat" class="btn btn-primary btn-md" value="Rechercher"  >
      
       </span>
       </div>
      </form>
     </div>


    <div class="container">
        <div class="panel panel-info" >
            <div class="panel-heading">Liste des Employes</div>
            <div class="panel-body">
            <table class="table table-bordered">
            <tr>
            <td>Matricule</td>
            <td>nom Employe</td>
            <td>prenom Eploye</td>
            <td> Date de Naissance</td>
            <td>Salaire Employe</td>
            <td> Tel Employe</td>
            <td> Email Employe</td>
            <td colspan="2">Action</td>
            </tr>
            <?php
            error_reporting(E_ALL);
ini_set("display_errors", 1);
            while($emp=mysqli_fetch_row($liste)){
           echo" <tr>
                <td>$emp[0]</td>
                <td>$emp[1]</td>
                <td>$emp[2]</td>
                <td>$emp[3]</td>
                <td>$emp[4]</td>
                <td>$emp[5]</td>
                <td>$emp[6]</td>
                <td><a href='?page=edit&id=$emp[0]'><i class='fas fa-edit'></i></span></a></td>
                <td><a href='controller/EmployeController.php?id=$emp[0]'><span class='far fa-trash-alt'></a></td>
                </tr>";
            }
            ?>
            </table>
            </div>
        </div>
    </div>
</body>
</html>