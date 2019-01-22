<?php
$bdd = new PDO('mysql:host=localhost;dbname=biochimie', 'root', '');

if(isset($_POST['nouvellepartie'])) {
   $adversaire = htmlspecialchars($_POST['adversaire']);
    $victoire = boolval($_POST['victoire']);
    $date = $_POST['date'];
   if(!empty($_POST['adversaire']) AND !empty($_POST['date']) ) {
      $adversairelength = strlen($adversaire);
      if($adversairelength <= 255) {
        if (empty($victoire)) {$victoire=0;}
                 $insertmbr = $bdd->prepare("INSERT INTO parties(nom, date, victoire) VALUES(?, ?, ?)");
         $insertmbr->execute(array($adversaire, $date, $victoire));
         $erreur = "Votre compte a bien été créé !";  } 
       else {$erreur = "Votre pseudo ne doit pas dépasser 255 caractères !"; } 
   }else {$erreur = "Tous les champs doivent être complétés !";}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bioch'IMIE - Acceuil</title>
	<link rel="stylesheet" type="text/css" href="styles/themes.css">
	<link rel="icon" href="atome.png" />


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
 <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="adversaire">Adversaires :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Adversaires" id="adersaire" name="adversaire" value="<?php if(isset($adversaire)) { echo $adversaire; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="date">Date (AAAA-MM-JJ) :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="AAAA-MM-JJ" id="date" name="date" value="<?php if(isset($date)) { echo $date; } ?>" />
                  </td>
               </tr>
                 <tr>
                  <td align="right">
                     <label for="victoire">Victoire (1 ou 0) :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="1 ou 0" id="victoire" name="victoire" value="<?php if(isset($victoire)) { echo $victoire; } ?>" />
                  </td>
               </tr>
               
              
              

               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="nouvellepartie" value="Envoyer !" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>

</body>
</html>