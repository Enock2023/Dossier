<?php
// Connexion à la base de données
include_once('base.php');
if(isset($_POST['btn'])){
// Vérification de la validité des informations
// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);
$pseudo  =$_POST['pseudo'];
$nom     =$_POST['nom'];
$prenom  =$_POST['prenom'];
$email   =   $_POST['email'];

$req = $bdd->prepare('INSERT INTO utilisateur(pseudo,nom,prenom, pass, email) VALUES(?,?,?,?,?)');
if($req->execute(array($_POST['pseudo'],$_POST['nom'],$_POST['prenom'],$_POST['pass'],$_POST['email']

))){
   echo ('<script type="text/javascript">alert("Inscription a été créé avec succès");</script>');
}else{
   echo ('<script type="text/javascript">alert("Inscription n\'a pas puis etre créé");</script>');
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1><br/><br/><br/>
    <table>
    <form action="inscription.php" method="POST">
     <div>
       <label for="">Pseudo:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" name="pseudo"><br/><br/>
    </div>
    <div>
       <label for="">Nom:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" name="nom"><br/><br/>
    </div>
    <div>
       <label for="">Prenom:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" name="prenom"><br/><br/>
    </div>
    <div>
       <label for="">Mot de passe:</label>&nbsp;&nbsp;
       <input type="password" name="pass"><br/><br/>
    </div>
  
    <div>
       <label for="">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="mail" name="email"><br/><br/>
    </div>
    <div>
       <input type="submit" value="s\'inscrire" name="btn">
    </div>
    </form>
    </table>
</body>
</html>
