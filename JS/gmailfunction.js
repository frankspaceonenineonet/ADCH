function onSignIn(googleUser) {
  	var profile = googleUser.getBasicProfile();
  	var email = profile.getEmail();

	$.post("gmailfunction.php?", {email:email},
		function (data){
			if(data>0){
				location.href="http://capitalhumano.comxa.com/wp";
			}
			else
				alert("Usuario Invalido");
			}
			);
		}