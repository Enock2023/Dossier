<html>
 <head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
 </head>
 <body style='background:#fff;'>
 <div id="content">
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if($_SESSION['pseudo'] !== ""){
 $user = $_SESSION['pseudo'];
 // afficher un message
 echo "Bonjour $user, vous êtes connecté";
 }
 ?>
 
 </div>
 </body>
</html>