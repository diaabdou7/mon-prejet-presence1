
 <?php
 include("bd.php");
 function verifie($donnees){
 
   $donnees = (string) $donnees;
         if (isset($donnees) && !empty($donnees)) {
           return $donnees;
         }
         else {
           return false;
         }

 }

if (isset($_POST))
{
  $message= ' ';
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$mdp =  $_POST['mdp'];
	$mdp2 = $_POST['mdp'];
   /* on test si les champ sont bien remplis */
    if(verifie($_POST['nom']) and verifie($_POST['email'])  and verifie($_POST['mdp']) and verifie($_POST['mdp2']))
    {
       
        /* on test si le mdp contient bien au moins 6 caractère */
        if (strlen($_POST['mdp'])>=6)
        {
            /* on test si les deux mdp sont bien identique */
            if ($_POST['mdp']==$_POST['mdp2'])
            {
                // On crypte le mot de passe
                $_POST['mdp'] = $_POST['mdp2'];
                // on se connecte à MySQL et on sélectionne la base
                include('bd.php');
                //On créé la requête
                $sql = 'INSERT INTO etudiant(nom,email,mdp) VALUES ("'.$nom.'","'.$email.'","'.$mdp.'")';
                $result= $conn->query($sql);
                /*$result= mysqli_query($conn,$sql);*/ //version mysqli

	if (!$result) {

		echo "Query Failed";

	}else {
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $("#message").removeClass("alert alert-danger").addClass("alert alert-success").html("Inscription éffectuée avec succès!");
            $("#register-form").trigger("reset");
  </script>
    <?php
    //du code...
  }

            }
            else echo "Les mots de passe ne sont pas identiques";
        }
        else echo "Le mot de passe est trop court !";
      // }
      // else  echo "Cet mail a déjà été utilisé pour un autre compte";
    }
    else echo "Veuillez saisir tous les champs !"; 
}
?>