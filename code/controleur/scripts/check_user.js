	function check_email(input) {
	  if (input.value != document.getElementById('emailaddr').value) {
		input.setCustomValidity('Les deux adresses ne correspondent pas.');
	  } 
	  else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}
	function check_pwd(input) {
	  if (input.value != document.getElementById('password_user').value) {
		input.setCustomValidity('Les deux mot de passe ne correspondent pas.');
	  } 
	  else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}
	function check_egaux(input1,input2) {
	  if (input1.value != input2.value) {
		input.setCustomValidity('La recopie n\'est pas correcte.');
	  } 
	  else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}
	