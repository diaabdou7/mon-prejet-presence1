$(document).ready(function(){
	$("#register-form").on("submit", function(e){
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $("#register-form");
		/*var nom = $("#fullname").val();
		var email = $("#fullname").val();
		var mdp = $("#fullname").val();*/

		$.ajax({
			method: "POST",
			url: "http://localhost/student/page_enregistrement.php",
			dataType: "HTML",
			data: form.serialize(),
			success: function(reponse)
			{
				switch (reponse) {
				  case '':
				    $("#message").addClass("alert alert-success").html(reponse);
						
				    break;
				  
				  default:
				    $("#message").addClass("alert alert-danger").html(reponse);
				    break;
				}
			},
			error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});

     })
	//attendance

// 	$("#attendance").on("submit", function(e){
// 		e.preventDefault();//on desactive le comportement par defaut du formulaire
// 		var form = $("#attendance");
// 		/*var nom = $("#fullname").val();
// 		var email = $("#fullname").val();
// 		var mdp = $("#fullname").val();*/

// 		$.ajax({
// 			method: "POST",
// 			url: "http://localhost/student/trait_attendance.php",
// 			dataType: "HTML",
// 			data: form.serialize(),
// 			success: function(reponse)
// 			{
// 				switch (reponse) {
// 				  case 'ok':
// 				    $("#message").addClass("alert alert-success").html(reponse);
						
// 				    break;
				  
// 				  default:
// 				    $("#message").addClass("alert alert-danger").html(reponse);
// 				    break;
// 				}
// 			},
// 			error: function () {
// 				alert("Erreur d'envoi de donnée");
// 			}
// 		})
// 	});
	
// })