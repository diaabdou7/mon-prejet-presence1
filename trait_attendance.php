




<?php

function verifie($donnees){
 
   $donnees = (string) $donnees;
         if (isset($donnees) && !empty($donnees)) {
           return $donnees;
         }
         else {
           return false;
         }

 }

if (isset($_POST)) {

        
    include("bd.php") ;
  // $db = mysqli_select_db($conn,'student_attendance');
  $email= $_POST['email'];
  $mdp = $_POST['mdp'];
  $message = '';

 if (verifie($email) AND verifie($mdp)   ) {

$sql = " SELECT iduser  FROM etudiant WHERE email ='$email' and mdp ='$mdp'";
   
  //requette vers la BDD
  $query = $conn->query($sql);
  //récuperation de donnée: fetch (vas chercher) retourne une entrée depuis la table
  $user = $query->fetch();
  if ($user) {
// si l'entre a ete trouve avec la requete qu'on a lancé
$iduser = $user["iduser"];

$datesign = date('Y-m-d');
 $verif = "SELECT iduser  FROM presence WHERE iduser ='$iduser' and datesign = '$datesign'" ;
 
//  //requette vers la BDD
$ver = $conn->query($verif);
// //récuperation de donnée: fetch (vas chercher) retourne une entrée depuis la table
 $user_verif = $ver->fetch();
 

  if (!isset($user_verif['iduser'])) {
// // s'il n'y a pas de resultats 

 $iduser = $user["iduser"];




  $insert = "INSERT INTO presence SET iduser = $iduser,datesign = NOW(),timesign = NOW()";
  $conn->query($insert);

   header('Location:acceuil.php') ;
   } else{
      header('Location:page_recuperation.php') ;
   }
  } else echo"email ou mot de pass invalide";
 
}else echo"remplissez tous les champs svp";

 }

?>