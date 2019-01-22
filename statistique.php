<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=biochimie', 'root', '');

$reponse = $bdd->query("SELECT * FROM `parties` LIMIT 0, 30");

?>
  
<!DOCTYPE html>
<html>
<head>
	<title>Bioch'IMIE - Statisiques</title>
	<link rel="stylesheet" type="text/css" href="styles/themes.css">
	<link rel="icon" href="Images/atome.png" />


</head>

	<body>
<div class="nav">
    <ul>
    <li><a id="titrenav" href="index.php"> <img id="atom" src="http://image.noelshack.com/fichiers/2018/49/5/1544218324-atome.png"> Bioch'IMIE</a></li>
        <li><a href="parcour.html">Parcour</a></li>
        <li><a href="presentation_joueurs.html">Joueurs</a></li>
		<li><a href="matchs.php">Matchs</a></li>
		<li><a href="statistique.php">Statistiques</a></li>
        <li><a href="outil.php">Outils</a></li>
    </ul>
</div>

    <?php
    while ($donnees = $reponse->fetch())
{?>

    <div id="blocbdd">
  <p>
    Numero : <?php echo $donnees['id']; ?><br/>
    <strong>Adversaires</strong> : <?php echo $donnees['nom']; ?><br/>
    Resultat : <br />
    <?php if ($donnees['victoire']) {
            echo "Vicoire !";
            }
            else{echo "defaite";}  ?>
    </p>
</div>
<?php
}
 
$reponse->closeCursor(); // Termine le traitement de la requête
 
?>


</center>
</body>
</html>