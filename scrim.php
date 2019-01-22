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
?>
<div id="nom_equipe">
<?php

$requete_equipe = $bdd->query("SELECT * FROM equipe WHERE nom_equipe='IESEG\'agné' ");

while($data=$requete_equipe->fetch()){

    echo '<h1>'.$data['nom_equipe'].'</h1>';
}
?>
</div>

</div>

<div id="stats_joueurs">
<h2>Nom joueur</h2>
<h3>Role</h3>
<h3>Solo/Duo</h3>
<h3>Flex</h3>
<h3>Winrate</h3>
<h3>Main N°1</h3>
<h3>Main N°2</h3>
<h3>Main N°3</h3>
<h3>Winrate champion N°1</h3>
<h3>Winrate champion N°2</h3>
<h3>Winrate champion N°3</h3>
<h3>OPGG</h3>

</div>
<div id="j1">
<?php
$requete_equipe->closeCursor();

$requetej1 = $bdd->query("SELECT * FROM joueur1 WHERE nom_equipe='IESEG\'agné' ");

while($data=$requetej1->fetch()){

    echo '<h2>'.$data['nom_joueur_j1'].'</h2>';
    echo '<h3>'.$data['role_j1'].'</h3>';
    echo '<h3>'.$data['soloduo_j1'].'</h3>';
    echo '<h3>'.$data['flex_j1'].'</h3>';
    echo '<h3>'.$data['winrate_j1'].'</h3>';
    echo '<h3>'.$data['main1_j1'].'</h3>';
    echo '<h3>'.$data['main2_j1'].'</h3>';
    echo '<h3>'.$data['main3_j1'].'</h3>';
    echo '<h3>'.$data['winrate_main1_j1'].'</h3>';
    echo '<h3>'.$data['winrate_main2_j1'].'</h3>';
    echo '<h3>'.$data['winrate_main3_j1'].'</h3>'; 

    
    ?>
    <?php
    
    echo "<a href=".$data['opgg_j1']." id='opgg_stat'><img src='./Images/logo_opgg.png' width='15%'></a>";
}
$requetej1->closeCursor();
?>
</div>

<div id="j2">
<?php
$requetej2 = $bdd->query("SELECT * FROM joueur2 WHERE nom_equipe='IESEG\'agné' ");

while($data=$requetej2->fetch()){

    echo '<h2>'.$data['nom_joueur_j2'].'</h2>';
    echo '<h3>'.$data['role_j2'].'</h3>';
    echo '<h3>'.$data['soloduo_j2'].'</h3>';
    echo '<h3>'.$data['flex_j2'].'</h3>';
    echo '<h3>'.$data['winrate_j2'].'</h3>';
    echo '<h3>'.$data['main1_j2'].'</h3>';
    echo '<h3>'.$data['main2_j2'].'</h3>';
    echo '<h3>'.$data['main3_j2'].'</h3>';
    echo '<h3>'.$data['winrate_main1_j2'].'</h3>';
    echo '<h3>'.$data['winrate_main2_j2'].'</h3>';
    echo '<h3>'.$data['winrate_main3_j2'].'</h3>';
    ?>
    <?php
    
    echo "<a href=".$data['opgg_j2']." id='opgg_stat'><img src='./Images/logo_opgg.png' width='15%' ></a>";
}
$requetej2->closeCursor();
?>
</div>

<div id="j3">
<?php
$requetej3 = $bdd->query("SELECT * FROM joueur3 WHERE nom_equipe='IESEG\'agné' ");

while($data=$requetej3->fetch()){

    echo '<h2>'.$data['nom_joueur_j3'].'</h2>';
    echo '<h3>'.$data['role_j3'].'</h3>';
    echo '<h3>'.$data['soloduo_j3'].'</h3>';
    echo '<h3>'.$data['flex_j3'].'</h3>';
    echo '<h3>'.$data['winrate_j3'].'</h3>';
    echo '<h3>'.$data['main1_j3'].'</h3>';
    echo '<h3>'.$data['main2_j3'].'</h3>';
    echo '<h3>'.$data['main3_j3'].'</h3>';
    echo '<h3>'.$data['winrate_main1_j3'].'</h3>';
    echo '<h3>'.$data['winrate_main2_j3'].'</h3>';
    echo '<h3>'.$data['winrate_main3_j3'].'</h3>';
    ?>
    <?php
    
    echo "<a href=".$data['opgg_j3']." id='opgg_stat'><img src='./Images/logo_opgg.png' width='15%' ></a>";
}
$requetej3->closeCursor();
?>
</div>

<div id="j4">
<?php
$requetej4 = $bdd->query("SELECT * FROM joueur4 WHERE nom_equipe='IESEG\'agné' ");

while($data=$requetej4->fetch()){

    echo '<h2>'.$data['nom_joueur_j4'].'</h2>';
    echo '<h3>'.$data['role_j4'].'</h3>';
    echo '<h3>'.$data['soloduo_j4'].'</h3>';
    echo '<h3>'.$data['flex_j4'].'</h3>';
    echo '<h3>'.$data['winrate_j4'].'</h3>';
    echo '<h3>'.$data['main1_j4'].'</h3>';
    echo '<h3>'.$data['main2_j4'].'</h3>';
    echo '<h3>'.$data['main3_j4'].'</h3>';
    echo '<h3>'.$data['winrate_main1_j4'].'</h3>';
    echo '<h3>'.$data['winrate_main2_j4'].'</h3>';
    echo '<h3>'.$data['winrate_main3_j4'].'</h3>';
    ?>
    <?php
    
    echo "<a href=".$data['opgg_j4']." id='opgg_stat'><img src='./Images/logo_opgg.png' width='15%' ></a>";
}
$requetej4->closeCursor();
?>
</div>

<div id="j5">
<?php
$requetej5 = $bdd->query("SELECT * FROM joueur5  WHERE nom_equipe='IESEG\'agné' ");

while($data=$requetej5->fetch()){

    echo '<h2>'.$data['nom_joueur_j5'].'</h2>';
    echo '<h3>'.$data['role_j5'].'</h3>';
    echo '<h3>'.$data['soloduo_j5'].'</h3>';
    echo '<h3>'.$data['flex_j5'].'</h3>';
    echo '<h3>'.$data['winrate_j5'].'</h3>';
    echo '<h3>'.$data['main1_j5'].'</h3>';
    echo '<h3>'.$data['main2_j5'].'</h3>';
    echo '<h3>'.$data['main3_j5'].'</h3>';
    echo '<h3>'.$data['winrate_main1_j5'].'</h3>';
    echo '<h3>'.$data['winrate_main2_j5'].'</h3>';
    echo '<h3>'.$data['winrate_main3_j5'].'</h3>';
    ?>
    <?php
    
    echo "<a href=".$data['opgg_j5']." id='opgg_stat'><img src='./Images/logo_opgg.png' width='15%' ></a>";
}
$requetej5->closeCursor();
?>
</div>
</div>

