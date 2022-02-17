<html>
<head>
	<title></title>
</head>
<body>
<?php 
	//echo heading("Bienvenu dans ma page " .$nom); 
	//echo heading("Ma liste à faire",4); 
	//echo img('image/salon.jpg');
	//echo img(array('src'=>'image/salon.jpg', 'width'=>'500', 'height'=>'250', 'alt'=>'Spotify'));
	
	echo form_open('moncontroleur/controlcontact');
	echo form_fieldset('Connexion');
	echo br(1);
	echo form_label("Login");
	echo form_input('login');
	echo br(2);
	echo form_label("Mot de passe");
	echo form_input('mdp');
	echo br(2);
	echo form_submit('valider','valider');
	echo form_fieldset_close();
	echo form_close();
	
?>
			
</body>
</html>