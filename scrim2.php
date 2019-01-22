<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles/themes.css" /> 
    <style>
        h2{text-align: center;}
    </style>
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
    <br>
</div>
<div id="scrim"><h1> Scrim </h1></div>

<?php 
session_start();

$bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=biochimie', 'root', '');



if (isset($_POST['validation_equipe'])){

    $get_nomteam = ($_POST["choix_team"]);

    $requete_equipe = $bdd->prepare("SELECT * FROM equipe WHERE nom_equipe=?");
    $requete_equipe->execute(array($get_nomteam));
    while($data=$requete_equipe->fetch()){
    
        echo $data['nom_equipe'];
    }
        print_r($data);
    
}



?>

<center>
<form action="" method="post">
<select name="choix_team">

<OPTION value="Les Branquignols">Les Branquignols</OPTION>
<OPTION value="test">test</OPTION>
<OPTION value="Alch'\IMIE">Alch'IMIE</OPTION>

</select>
<br> <br>

<label for="submit"></label>
<input type="submit" name="validation_equipe">
</form>

</center>


</body>
</html>

