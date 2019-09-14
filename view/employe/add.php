

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
            <div class="panel-heading">Formulaire d'ajout</div>
            <div class="panel-body">
            <form action="controller/EmployeController.php" method="post">
            <div class="form-group">
                <label for="" class="form control-label"> Employe</label>
                <input type="text" class="form-control" name="matriculeEMP" value="EM-<?= $r ?>" >
                </div>
                <div class="form-group">
                <label for="" class="form control-label"> Nom Employe</label>
                <input type="text" class="form-control" name="nomEMP" placeholder="veillez enregistrer votre nom">
                   <?php  if(!empty($_POST['nomEMP'])){
                     echo  $post_ror="le nom ne doit pa etre vide";
                       
                   }
                   ?>
                </div>
                
                <div class="form-group">
                <label for="" class="form control-label"> Preom Employe</label>
                <input type="text" class="form-control" name="prenomEMP" placeholder="veillez enregistrer votre prenom" >
                </div>
                <div class="form-group">
                <label for="" class="form control-label"> date Naissance Employe</label>
                <input type="text" class="form-control" name="dateNais" placeholder="exmple:20/10/1998">
                <?php if(isset($_POST['date'])){
                    $date=$_POST['date'];
                    $tabledate=explode("/",$date);
                    if(!checkdate($tabledate[1],$tabledate[0],$tabledate[2])){
                        $erreur="la date $date n'est pas valide";
                        $ETAT=false;
                }
                    }?>
                </div>
                <div class="form-group">
                <label for="" class="form control-label">Salaire Employe</label>
                <input type="text" class="form-control" name="salaireEMP" placeholder="salaire entre 25000-200000">
                                <?php
                    if(isset($_POST['salaire'])){
                        $salaire=$_POST['salaire'];
                            if($salaire>=25000 && $salaire<=2000000){
                            
                            }else{
                                $erreur= " le salire dois etre compris entre 25000-2000000 ";
                                $ETAT=false;
                            } echo '<br>';
                        }
                    
                    
                    ?>
                      
                </div>
                <div class="form-group">
                <label for="" class="form control-label">Tel Employe</label>
                <input type="text" class="form-control" name="telEMP" placeholder="saisir un bon format exemple:772506225">
                <?php
                    if(isset($_POST['tel'])){
                    
                        $tel=$_POST['tel'];
                        if( preg_match('/^(77|78|70|76)[0-9]{7}$/',$tel)){
                            
                        }else{
                            $erreur=" ce numero n'est pas valide";
                            $ETAT=false;
                        }
                    
                    }
                    ?>
                </div>
                <div class="form-group">
                <label for="" class="form control-label"> email Employe</label>
                <input type="text" class="form-control" name="emailEMP" placeholder=" sous format:samate015@gmail.com">
                </div>
                <input  class="btn btn-success" type="submit" value="Envoyer" name="Enregistre">
                <input  class="btn btn-danger" type="reset" value="Annuler" name="Annuler">

            </form>
    
            </div>
        </div>
    </div>
 
</body>

</html>