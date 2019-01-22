<?php
$bdd = new PDO('mysql:host=localhost;dbname=exercice;charset=utf8', 'root', '');
if (isset($_POST["forminscription"])) {
		$identifiant= htmlspecialchars($_POST["identifiant"]);
		$mdp= sha1($_POST["mdp"]);
		$mdp2= sha1($_POST["mdp2"]);
		$identifiantleght = strlen($identifiant);
	/* C'est plus sécurisé de passer les reponses en variable PHP */
/* TEST SI TOUT LES CHAMPS SONT COMPLETES */
	if (!empty($_POST["identifiant"]) AND !empty($_POST["mdp"] )AND !empty($_POST["mdp2"] )) {
		
		/* TEST LONGUEUR PSEUDO */
		if ($identifiantleght<=255) 
		{$reqidentifiant= $bdd->prepare("SELECT * From comptes WHERE pseudo = ?");
					$reqidentifiant ->execute(array($identifiant));
					$identifiantexist = $reqidentifiant ->rowCount();
					if ($identifiantexist ==0) {
								
										/* TEST DES 2 MOTS DE PASSES */
										if ($mdp==$mdp2) 
										{
											
											
											
											class User{
   												private $pseudo;
    												private $mot_de_passe;
    												private $repertoire = array();
    												function __construct(string $Ppseudo, string $Pmot_de_passe){
        												$this->pseudo=$Ppseudo;
        												$this->mot_de_passe=$Pmot_de_passe;
													  }
													  
													  function book(){
														  foreach ($this->repertoire as $value) {
															  echo("$value");
														  }
													  }
													  function addbook($a){
														  array_push($this->repertoire, $a);
													  }
												
												}
											
											$$identifiant = new User($identifiant, $mdp);
								
											$sql = $bdd->prepare("INSERT INTO comptes(pseudo, mot_de_passe, objet) VALUES (?, ?, ?)");
											$sql->execute(array($identifiant, $mdp, serialize($$identifiant)));
											$erreur = "Votre compte a bien été créé !";
											
											}else
										{$erreur = "Vos mots de passe ne correspondent pas !";}
					}else
					{$erreur = "Identifiant deja utilisé !";}
		}
		else
		{
			$erreur = "Votre identifiant ne doit pas depasser 255 caractères";
		}
	}
	
	else
	{
		$erreur = "Tout les champs doivent être completés !";
	}
	;}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" type="text/css" href="styles/themes.css">
	<title>Inscription !</title>

	<meta charset="utf-8">	
</head>
	
<body>

		<div align="center">

			<h1 id="titre_entete">S'inscrire</h1>
			
	

 <form action="" method="post">
 	<fieldset>
 		<tr>
 		<td>
		<label for="identifiant">Identifiant :</label>
		</td>
		<td>
		<input type="texte" name="identifiant" placeholder="Identifiant" id="identifiant" value="<?php if(isset($identifiant)) {echo $identifiant; } ?>">
		</td>
		</tr>
		<tr>
		<td>
		<label for="mdp1">Votre mot de passe :</label>
		</td>
		<td>
		<input placeholder="Mot de passe" type="password" name="mdp" id="mdp1"> <br><br>
		<label for="mdp2">Confirmez votre mot de passe :</label>
		<input placeholder="Confirmer mdp" type="password" name="mdp2" id="mdp2"> <br><br>
		
<input type="submit" value="Je m'inscris !" name="forminscription">
		</fieldset>
		
	</form>
		</div>
<p>Déja incrit ? <a href="connection.php">Se connecter</a></p>
<?php
if (isset($erreur)) {
	echo $erreur;
	# On affiche l'erreur . La variable est deinie dans l'enchainement de if au debut du traitement php /\
	
}
?>
</div>
</body>
</html>