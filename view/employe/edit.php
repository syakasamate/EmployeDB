
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet"  type="style/css" href="js.css">
    <title>Document</title>
</head>
<body>
    <div class="container col-md-6 col-md-offset-3">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire de Modification</div>
            <div class="panel-body">
            <form action="controller/EmployeController.php" method="post">
            <div class="form-group">
                <label for="" class="form control-label"> Matricule Employe</label>
                <input type="text" class="form-control" name="matricule"  readonly value="<?= $ligne[0]?>">
                </div>
                <div class="form-group">
                <label for="" class="form control-label"> Nom Employe</label>
                <input type="text" class="form-control" name="nomEMP" value="<?=$ligne[1]?>">
                </div>
                <div class="form-group">
                <label for="" class="form control-label"> Preom Employe</label>
                <input type="text" class="form-control" name="prenomEMP"  value="<?=$ligne[2]?>">
                </div>
                <div class="form-group">
                <label for="" class="form control-label"> date Naissance Employe</label>
                <input type="text" class="form-control" name="dateNais"  value="<?=$ligne[3]?>">
                </div>
                <div class="form-group">
                <label for="" class="form control-label">Salaire Employe</label>
                <input type="text" class="form-control" name="salaireEMP" value="<?=$ligne[4]?>">
                </div>
                <div class="form-group">
                <label for="" class="form control-label">Tel Employe</label>
                <input type="text" class="form-control" name="telEMP" value="<?=$ligne[5]?>">
                </div>
                <div class="form-group">
                <label for="" class="form control-label"> email Employe</label>
                <input type="text" class="form-control" name="emailEMP" value="<?=$ligne[6]?>">
                </div>
                <input  class="btn btn-success" type="submit" value="Modifier" name="Modifier">
                <input  class="btn btn-danger" type="reset" value="Annuler" name="Annuler">

            </form>
    
            </div>
        </div>
    </div>

</body>
</html>