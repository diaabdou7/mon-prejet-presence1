


<?php include("inc/header.php") ?><br><br>
<div class="col-md-5 p-0 row-cols-1 container justify-content-center">
<div class="text-primary col bg-info text-light pt-auto pb-auto h3" style="height: 50px; text-align: center;" >
	Veillez vous enregistrez
</div>

<div class="container admin-form shadow p-4">
	<div class="row">
		<div class="col-md-6 offset-3">
             
			<form action="page_enregistrement.php" id="register-form" method="POST" >
				<div id="message"></div>
				<div class="form-group">
                         <label for="" class="form-label text-bold text-danger">Nom et prenom</label>
                              <input type="text" name="nom" id="fullname" class="form-control" placeholder="votre nom et prenom">
					
				</div>

				<div class="form-group">
                         <label for="" class="form-label text-bold text-danger">E-mail</label>
                              <input type="email" name="email" id="email" class="form-control" placeholder="votre Adresse mail">
					
				</div>

				<div class="form-group">
                         <label for="" class="form-label text-bold text-danger">Mot de passe</label>
                              <input type="password" name="mdp" id="mdp" class="form-control" placeholder="votre Mot de passe">
					
				</div>

				<div class="form-group">
                         <label for="" class="form-label text-bold text-danger">Mot de passe</label>
                              <input type="password" name="mdp2" id="mdp_c" class="form-control" placeholder="Reprendre le mot de passe">
					
				</div>

				 
                           <button type="submit" class=" btn btn-success" id="mysubmit" name="send" value="send"> Valider </button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button type="submit" class=" btn btn-warning" id="mysubmit" name="send" value="send"><a href="page_connexion.php"> se connecter </a></button>
                       
			</form>
			
		</div>
		
	</div>
	</div>
</div>
<?php include("inc/footer.php") ?>