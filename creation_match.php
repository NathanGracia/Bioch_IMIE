<?php

$bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=biochimie', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


if (isset($_POST['nouveaumatch'])){

    $nom_equipe = ($_POST["nom_equipe"]);
    /* J1 */
    $nom_joueur_j1 = ($_POST["nom_joueur_j1"]);
    $role_j1 = ($_POST["role_j1"]);
    $soloduo_j1 = ($_POST["soloduo_j1"]);
    $flex_j1 = ($_POST["flex_j1"]);
    $winrate_j1 = ($_POST["winrate_j1"]);
    $main1_j1 = ($_POST["main1_j1"]);
    $main2_j1 = ($_POST["main2_j1"]);
    $main3_j1 = ($_POST["main3_j1"]);
    $winrate_main1_j1 = ($_POST["winrate_main1_j1"]);
    $winrate_main2_j1 = ($_POST["winrate_main2_j1"]);
    $winrate_main3_j1 = ($_POST["winrate_main3_j1"]);
    $opgg_j1 = ($_POST["opgg_j1"]);

    /* J2 */
    $nom_joueur_j2 = ($_POST["nom_joueur_j2"]);
    $role_j2 = ($_POST["role_j2"]);
    $soloduo_j2 = ($_POST["soloduo_j2"]);
    $flex_j2 = ($_POST["flex_j2"]);
    $winrate_j2 = ($_POST["winrate_j2"]);
    $main1_j2 = ($_POST["main1_j2"]);
    $main2_j2 = ($_POST["main2_j2"]);
    $main3_j2 = ($_POST["main3_j2"]);
    $winrate_main1_j2 = ($_POST["winrate_main1_j2"]);
    $winrate_main2_j2 = ($_POST["winrate_main2_j2"]);
    $winrate_main3_j2 = ($_POST["winrate_main3_j2"]);
    $opgg_j2 = ($_POST["opgg_j2"]);

    /* J3 */
    $nom_joueur_j3 = ($_POST["nom_joueur_j3"]);
    $role_j3 = ($_POST["role_j3"]);
    $soloduo_j3 = ($_POST["soloduo_j3"]);
    $flex_j3 = ($_POST["flex_j3"]);
    $winrate_j3 = ($_POST["winrate_j3"]);
    $main1_j3 = ($_POST["main1_j3"]);
    $main2_j3 = ($_POST["main2_j3"]);
    $main3_j3 = ($_POST["main3_j3"]);
    $winrate_main1_j3 = ($_POST["winrate_main1_j3"]);
    $winrate_main2_j3 = ($_POST["winrate_main2_j3"]);
    $winrate_main3_j3 = ($_POST["winrate_main3_j3"]);
    $opgg_j3 = ($_POST["opgg_j3"]);

    /* J4 */
    $nom_joueur_j4 = ($_POST["nom_joueur_j4"]);
    $role_j4 = ($_POST["role_j4"]);
    $soloduo_j4 = ($_POST["soloduo_j4"]);
    $flex_j4 = ($_POST["flex_j4"]);
    $winrate_j4 = ($_POST["winrate_j4"]);
    $main1_j4 = ($_POST["main1_j4"]);
    $main2_j4 = ($_POST["main2_j4"]);
    $main3_j4 = ($_POST["main3_j4"]);
    $winrate_main1_j4 = ($_POST["winrate_main1_j4"]);
    $winrate_main2_j4 = ($_POST["winrate_main2_j4"]);
    $winrate_main3_j4 = ($_POST["winrate_main3_j4"]);
    $opgg_j4 = ($_POST["opgg_j4"]);

    /* J5 */
    $nom_joueur_j5 = ($_POST["nom_joueur_j5"]);
    $role_j5 = ($_POST["role_j5"]);
    $soloduo_j5 = ($_POST["soloduo_j5"]);
    $flex_j5 = ($_POST["flex_j5"]);
    $winrate_j5 = ($_POST["winrate_j5"]);
    $main1_j5 = ($_POST["main1_j5"]);
    $main2_j5 = ($_POST["main2_j5"]);
    $main3_j5 = ($_POST["main3_j5"]);
    $winrate_main1_j5 = ($_POST["winrate_main1_j5"]);
    $winrate_main2_j5 = ($_POST["winrate_main2_j5"]);
    $winrate_main3_j5 = ($_POST["winrate_main3_j5"]);
    $opgg_j5 = ($_POST["opgg_j5"]);

    if(!empty($_POST['nom_equipe']) AND !empty($_POST['nom_joueur_j1']) AND !empty($_POST['role_j1']) AND !empty($_POST['soloduo_j1']) 
        AND !empty($_POST['flex_j1']) AND !empty($_POST['winrate_j1']) AND !empty($_POST['opgg_j1']) 

        AND !empty($_POST['nom_joueur_j2']) AND !empty($_POST['role_j2']) AND !empty($_POST['soloduo_j2']) 
        AND !empty($_POST['flex_j2']) AND !empty($_POST['winrate_j2']) AND !empty($_POST['opgg_j2'])

        AND !empty($_POST['nom_joueur_j3']) AND !empty($_POST['role_j3']) AND !empty($_POST['soloduo_j3']) 
        AND !empty($_POST['flex_j3']) AND !empty($_POST['winrate_j3']) AND !empty($_POST['opgg_j3'])

        AND !empty($_POST['nom_joueur_j4']) AND !empty($_POST['role_j4']) AND !empty($_POST['soloduo_j4']) 
        AND !empty($_POST['flex_j4']) AND !empty($_POST['winrate_j4']) AND !empty($_POST['opgg_j4'])

        AND !empty($_POST['nom_joueur_j5']) AND !empty($_POST['role_j5']) AND !empty($_POST['soloduo_j5']) 
        AND !empty($_POST['flex_j5']) AND !empty($_POST['winrate_j5']) AND !empty($_POST['opgg_j5'])) { 
    
    

    $insertj1 = $bdd->prepare("INSERT INTO joueur1 (nom_equipe,nom_joueur_j1, role_j1, soloduo_j1, flex_j1,
      winrate_j1, main1_j1, main2_j1, main3_j1, winrate_main1_j1, winrate_main2_j1, winrate_main3_j1, opgg_j1) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $insertj1->execute(array($nom_equipe, $nom_joueur_j1, $role_j1, $soloduo_j1, $flex_j1, $winrate_j1, $main1_j1, $main2_j1, $main3_j1, $winrate_main1_j1
        , $winrate_main2_j1, $winrate_main3_j1, $opgg_j1));
        
    $id_j1 = $bdd->lastInsertId();

    $insertj2 = $bdd->prepare("INSERT INTO joueur2 (nom_equipe,nom_joueur_j2, role_j2, soloduo_j2, flex_j2,
        winrate_j2, main1_j2, main2_j2, main3_j2, winrate_main1_j2, winrate_main2_j2, winrate_main3_j2, opgg_j2) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
  
    $insertj2->execute(array($nom_equipe, $nom_joueur_j2, $role_j2, $soloduo_j2, $flex_j2, $winrate_j2, $main1_j2, $main2_j2, $main3_j2, $winrate_main1_j2
          , $winrate_main2_j2, $winrate_main3_j2, $opgg_j2));

    $id_j2 = $bdd->lastInsertId();

    $insertj3 = $bdd->prepare("INSERT INTO joueur3 (nom_equipe,nom_joueur_j3, role_j3, soloduo_j3, flex_j3,
        winrate_j3, main1_j3, main2_j3, main3_j3, winrate_main1_j3, winrate_main2_j3, winrate_main3_j3, opgg_j3) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
  
    $insertj3->execute(array($nom_equipe, $nom_joueur_j3, $role_j3, $soloduo_j3, $flex_j3, $winrate_j3, $main1_j3, $main2_j3, $main3_j3, $winrate_main1_j3
          , $winrate_main2_j3, $winrate_main3_j3, $opgg_j3));

    $id_j3 = $bdd->lastInsertId();
    
    $insertj4 = $bdd->prepare("INSERT INTO joueur4 (nom_equipe,nom_joueur_j4, role_j4, soloduo_j4, flex_j4,
        winrate_j4, main1_j4, main2_j4, main3_j4, winrate_main1_j4, winrate_main2_j4, winrate_main3_j4, opgg_j4) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
  
    $insertj4->execute(array($nom_equipe, $nom_joueur_j4, $role_j4, $soloduo_j4, $flex_j4, $winrate_j4, $main1_j4, $main2_j4, $main3_j4, $winrate_main1_j4
          , $winrate_main2_j4, $winrate_main3_j4, $opgg_j4));

    $id_j4 = $bdd->lastInsertId();
    
    $insertj5 = $bdd->prepare("INSERT INTO joueur5 (nom_equipe,nom_joueur_j5, role_j5, soloduo_j5, flex_j5,
        winrate_j5, main1_j5, main2_j5, main3_j5, winrate_main1_j5, winrate_main2_j5, winrate_main3_j5, opgg_j5) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
  
    $insertj5->execute(array($nom_equipe, $nom_joueur_j5, $role_j5, $soloduo_j5, $flex_j5, $winrate_j5, $main1_j5, $main2_j5, $main3_j5, $winrate_main1_j5
          , $winrate_main2_j5, $winrate_main3_j5, $opgg_j5));

    $id_j5 = $bdd->lastInsertId();

          
    $insertid_equipe = $bdd->prepare("INSERT INTO equipe(nom_equipe,id_joueur1, id_joueur2, id_joueur3, id_joueur4, id_joueur5) values (?,?,?,?,?,?)");
    $insertid_equipe->execute(array($nom_equipe,$id_j1,$id_j2,$id_j3,$id_j4,$id_j5));

    $id = $bdd->lastInsertId(); 

    header('Location:matchs.php');

    
    
     }else{$erreur = "Veuillez compléter tout les champs";} 
} 
   
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/themes.css">
    <title>Création Match</title>
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
</div><br><br>

<form action="" method="POST">

<table id="bloc_creationmatch">

    <tr id="equipe">
        <th><th><th><th></th></th></th></th><th>Nom de l'équipe :</th>
        <td>
            <input type="text" placeholder="Equipe A LOL" name="nom_equipe">
        </td>
    </tr>
    <tr>
        <th></th>
        <th>Pseudo</th>
        <th>Rôle</th>
        <th>Solo/Duo</th>
        <th>Flex</th>
        <th>Winrate</th>
        <th>Main</th>
        <th>Winrate champion</th>
        <th>OPGG</th>
        
    </tr>

    <!-- J1 ------------------------------------------------------------------------------------------------------------------------------------------------------>

    <tr>
        <th>Joueurs1</th>
        <td>
            <input type="text" placeholder="Joueurs 1" name="nom_joueur_j1" value="<?php if(isset($nom_joueur_j1)) { echo $nom_joueur_j1; } ?>">
        </td>
        
        <td>
            <SELECT name="role_j1"> 
            <OPTION value="top">Top</OPTION>
            <OPTION value="jungle">Jungle</OPTION>
            <OPTION value="mid">Mid</OPTION>
            <OPTION value="adc">Adc</OPTION>
            <OPTION value="support">Support</OPTION>
        </td>
        
        <td>
        <SELECT name="soloduo_j1"> 
            <OPTION value="unranked">Unranked</OPTION>
            <OPTION value="fer 4">Fer 4</OPTION>
            <OPTION value="fer 3">Fer 3</OPTION>
            <OPTION value="fer 2">Fer 2</OPTION>
            <OPTION value="fer 1">Fer 1</OPTION>
            <OPTION value="bronze 4">Bronze 4</OPTION>
            <OPTION value="bronze 3">Bronze 3</OPTION>
            <OPTION value="bronze 2">Bronze 2</OPTION>
            <OPTION value="bronze 1">Bronze 1</OPTION>
            <OPTION value="silver 4">Silver 4</OPTION>
            <OPTION value="silver 3">Silver 3</OPTION>
            <OPTION value="silver 2">Silver 2</OPTION>
            <OPTION value="silver 1">Silver 1</OPTION>
            <OPTION value="gold 4">Gold 4</OPTION>
            <OPTION value="gold 3">Gold 3</OPTION>
            <OPTION value="gold 2">Gold 2</OPTION>
            <OPTION value="gold 1">Gold 1</OPTION>
            <OPTION value="platine 4">Platine 4</OPTION>
            <OPTION value="platine 3">Platine 3</OPTION>
            <OPTION value="platine 2">Platine 2</OPTION>
            <OPTION value="platine 1">Platine 1</OPTION>
            <OPTION value="diamant 4">Diamant 4</OPTION>
            <OPTION value="diamant 3">Diamant 3</OPTION>
            <OPTION value="diamant 2">Diamant 2</OPTION>
            <OPTION value="diamant 1">Diamant 1</OPTION>
            <OPTION value="master">Master</OPTION>
            <OPTION value="grand master">Grand master</OPTION>
            <OPTION value="challenger">Challenger</OPTION>
        </td>
        
        <td>
        <SELECT name="flex_j1"> 
            <OPTION value="unranked">Unranked</OPTION>
            <OPTION value="fer 4">Fer 4</OPTION>
            <OPTION value="fer 3">Fer 3</OPTION>
            <OPTION value="fer 2">Fer 2</OPTION>
            <OPTION value="fer 1">Fer 1</OPTION>
            <OPTION value="bronze 4">Bronze 4</OPTION>
            <OPTION value="bronze 3">Bronze 3</OPTION>
            <OPTION value="bronze 2">Bronze 2</OPTION>
            <OPTION value="bronze 1">Bronze 1</OPTION>
            <OPTION value="silver 4">Silver 4</OPTION>
            <OPTION value="silver 3">Silver 3</OPTION>
            <OPTION value="silver 2">Silver 2</OPTION>
            <OPTION value="silver 1">Silver 1</OPTION>
            <OPTION value="gold 4">Gold 4</OPTION>
            <OPTION value="gold 3">Gold 3</OPTION>
            <OPTION value="gold 2">Gold 2</OPTION>
            <OPTION value="gold 1">Gold 1</OPTION>
            <OPTION value="platine 4">Platine 4</OPTION>
            <OPTION value="platine 3">Platine 3</OPTION>
            <OPTION value="platine 2">Platine 2</OPTION>
            <OPTION value="platine 1">Platine 1</OPTION>
            <OPTION value="diamant 4">Diamant 4</OPTION>
            <OPTION value="diamant 3">Diamant 3</OPTION>
            <OPTION value="diamant 2">Diamant 2</OPTION>
            <OPTION value="diamant 1">Diamant 1</OPTION>
            <OPTION value="master">Master</OPTION>
            <OPTION value="grand master">Grand master</OPTION>
            <OPTION value="challenger">Challenger</OPTION>
        </td>
        
        <td>
            <input type="text" placeholder="50%" name="winrate_j1" maxlength="3">
        </td>
       
        <td>
            <input type="text" name="main1_j1" value="XXX"><br>
            <input type="text" name="main2_j1" value="XXX"><br>
            <input type="text" name="main3_j1" value="XXX"><br>
        </td>
       
        <td>
            <input type="text"name="winrate_main1_j1"placeholder="50%" value="XXX"><br>
            <input type="text"name="winrate_main2_j1"placeholder="50%" value="XXX"><br>
            <input type="text"name="winrate_main3_j1"placeholder="50%" value="XXX">
        </td>
        <td>
            <input type="text" name="opgg_j1" value="http://euw.op.gg/summoner/userName=" id="case_opgg">
        </td>
    </tr> 
    <!-- J2 ------------------------------------------------------------------------------------------------------------------------------------------------------>
    
    <tr>
    <th>Joueurs2</th>
        <td>
            <input type="text" placeholder="Joueurs 2" name="nom_joueur_j2">
        </td>
        
        <td>
            <SELECT name="role_j2"> 
            <OPTION value="jungle">Jungle</OPTION>
            <OPTION value="top">Top</OPTION>
            <OPTION value="mid">Mid</OPTION>
            <OPTION value="adc">Adc</OPTION>
            <OPTION value="support">Support</OPTION>
        </td>
       
        <td>
        <SELECT name="soloduo_j2"> 
            <OPTION value="unranked">Unranked</OPTION>
            <OPTION value="fer 4">Fer 4</OPTION>
            <OPTION value="fer 3">Fer 3</OPTION>
            <OPTION value="fer 2">Fer 2</OPTION>
            <OPTION value="fer 1">Fer 1</OPTION>
            <OPTION value="bronze 4">Bronze 4</OPTION>
            <OPTION value="bronze 3">Bronze 3</OPTION>
            <OPTION value="bronze 2">Bronze 2</OPTION>
            <OPTION value="bronze 1">Bronze 1</OPTION>
            <OPTION value="silver 4">Silver 4</OPTION>
            <OPTION value="silver 3">Silver 3</OPTION>
            <OPTION value="silver 2">Silver 2</OPTION>
            <OPTION value="silver 1">Silver 1</OPTION>
            <OPTION value="gold 4">Gold 4</OPTION>
            <OPTION value="gold 3">Gold 3</OPTION>
            <OPTION value="gold 2">Gold 2</OPTION>
            <OPTION value="gold 1">Gold 1</OPTION>
            <OPTION value="platine 4">Platine 4</OPTION>
            <OPTION value="platine 3">Platine 3</OPTION>
            <OPTION value="platine 2">Platine 2</OPTION>
            <OPTION value="platine 1">Platine 1</OPTION>
            <OPTION value="diamant 4">Diamant 4</OPTION>
            <OPTION value="diamant 3">Diamant 3</OPTION>
            <OPTION value="diamant 2">Diamant 2</OPTION>
            <OPTION value="diamant 1">Diamant 1</OPTION>
            <OPTION value="master">Master</OPTION>
            <OPTION value="grand master">Grand master</OPTION>
            <OPTION value="challenger">Challenger</OPTION>
        </td>
        
        <td>
        <SELECT name="flex_j2">
            <OPTION value="unranked">Unranked</OPTION> 
            <OPTION value="fer 4">Fer 4</OPTION>
            <OPTION value="fer 3">Fer 3</OPTION>
            <OPTION value="fer 2">Fer 2</OPTION>
            <OPTION value="fer 1">Fer 1</OPTION>
            <OPTION value="bronze 4">Bronze 4</OPTION>
            <OPTION value="bronze 3">Bronze 3</OPTION>
            <OPTION value="bronze 2">Bronze 2</OPTION>
            <OPTION value="bronze 1">Bronze 1</OPTION>
            <OPTION value="silver 4">Silver 4</OPTION>
            <OPTION value="silver 3">Silver 3</OPTION>
            <OPTION value="silver 2">Silver 2</OPTION>
            <OPTION value="silver 1">Silver 1</OPTION>
            <OPTION value="gold 4">Gold 4</OPTION>
            <OPTION value="gold 3">Gold 3</OPTION>
            <OPTION value="gold 2">Gold 2</OPTION>
            <OPTION value="gold 1">Gold 1</OPTION>
            <OPTION value="platine 4">Platine 4</OPTION>
            <OPTION value="platine 3">Platine 3</OPTION>
            <OPTION value="platine 2">Platine 2</OPTION>
            <OPTION value="platine 1">Platine 1</OPTION>
            <OPTION value="diamant 4">Diamant 4</OPTION>
            <OPTION value="diamant 3">Diamant 3</OPTION>
            <OPTION value="diamant 2">Diamant 2</OPTION>
            <OPTION value="diamant 1">Diamant 1</OPTION>
            <OPTION value="master">Master</OPTION>
            <OPTION value="grand master">Grand master</OPTION>
            <OPTION value="challenger">Challenger</OPTION>
        </td>
        
        <td>
            <input type="text" placeholder="50%" name="winrate_j2" maxlength="3">
        </td>
        
        <td>
            <input type="text" name="main1_j2" value="XXX"><br>
            <input type="text" name="main2_j2" value="XXX"><br>
            <input type="text" name="main3_j2" value="XXX"><br>
        </td>
       
        <td>
            <input type="text"name="winrate_main1_j2"placeholder="50%" value="XXX"><br>
            <input type="text"name="winrate_main2_j2"placeholder="50%" value="XXX"><br>
            <input type="text"name="winrate_main3_j2"placeholder="50%" value="XXX">
        </td>
        <td>
            <input type="text" name="opgg_j2" value="http://euw.op.gg/summoner/userName=" id="case_opgg">
        </td>
    </tr>
     <!-- J3 ------------------------------------------------------------------------------------------------------------------------------------------------------>
    
    <tr>
        <th>Joueurs3</th>
        <td>
            <input type="text" placeholder="Joueurs 3" name="nom_joueur_j3">
        </td>
        
        <td>
            <SELECT name="role_j3"> 
            <OPTION value="mid">Mid</OPTION>
            <OPTION value="top">Top</OPTION>
            <OPTION value="jungle">Jungle</OPTION>
            <OPTION value="adc">Adc</OPTION>
            <OPTION value="support">Support</OPTION>
        </td>      
       
        <td>
        <SELECT name="soloduo_j3">
            <OPTION value="unranked">Unranked</OPTION> 
            <OPTION value="fer 4">Fer 4</OPTION>
            <OPTION value="fer 3">Fer 3</OPTION>
            <OPTION value="fer 2">Fer 2</OPTION>
            <OPTION value="fer 1">Fer 1</OPTION>
            <OPTION value="bronze 4">Bronze 4</OPTION>
            <OPTION value="bronze 3">Bronze 3</OPTION>
            <OPTION value="bronze 2">Bronze 2</OPTION>
            <OPTION value="bronze 1">Bronze 1</OPTION>
            <OPTION value="silver 4">Silver 4</OPTION>
            <OPTION value="silver 3">Silver 3</OPTION>
            <OPTION value="silver 2">Silver 2</OPTION>
            <OPTION value="silver 1">Silver 1</OPTION>
            <OPTION value="gold 4">Gold 4</OPTION>
            <OPTION value="gold 3">Gold 3</OPTION>
            <OPTION value="gold 2">Gold 2</OPTION>
            <OPTION value="gold 1">Gold 1</OPTION>
            <OPTION value="platine 4">Platine 4</OPTION>
            <OPTION value="platine 3">Platine 3</OPTION>
            <OPTION value="platine 2">Platine 2</OPTION>
            <OPTION value="platine 1">Platine 1</OPTION>
            <OPTION value="diamant 4">Diamant 4</OPTION>
            <OPTION value="diamant 3">Diamant 3</OPTION>
            <OPTION value="diamant 2">Diamant 2</OPTION>
            <OPTION value="diamant 1">Diamant 1</OPTION>
            <OPTION value="master">Master</OPTION>
            <OPTION value="grand master">Grand master</OPTION>
            <OPTION value="challenger">Challenger</OPTION>
        </td>
       
        <td>
        <SELECT name="flex_j3">
            <OPTION value="unranked">Unranked</OPTION> 
            <OPTION value="fer 4">Fer 4</OPTION>
            <OPTION value="fer 3">Fer 3</OPTION>
            <OPTION value="fer 2">Fer 2</OPTION>
            <OPTION value="fer 1">Fer 1</OPTION>
            <OPTION value="bronze 4">Bronze 4</OPTION>
            <OPTION value="bronze 3">Bronze 3</OPTION>
            <OPTION value="bronze 2">Bronze 2</OPTION>
            <OPTION value="bronze 1">Bronze 1</OPTION>
            <OPTION value="silver 4">Silver 4</OPTION>
            <OPTION value="silver 3">Silver 3</OPTION>
            <OPTION value="silver 2">Silver 2</OPTION>
            <OPTION value="silver 1">Silver 1</OPTION>
            <OPTION value="gold 4">Gold 4</OPTION>
            <OPTION value="gold 3">Gold 3</OPTION>
            <OPTION value="gold 2">Gold 2</OPTION>
            <OPTION value="gold 1">Gold 1</OPTION>
            <OPTION value="platine 4">Platine 4</OPTION>
            <OPTION value="platine 3">Platine 3</OPTION>
            <OPTION value="platine 2">Platine 2</OPTION>
            <OPTION value="platine 1">Platine 1</OPTION>
            <OPTION value="diamant 4">Diamant 4</OPTION>
            <OPTION value="diamant 3">Diamant 3</OPTION>
            <OPTION value="diamant 2">Diamant 2</OPTION>
            <OPTION value="diamant 1">Diamant 1</OPTION>
            <OPTION value="master">Master</OPTION>
            <OPTION value="grand master">Grand master</OPTION>
            <OPTION value="challenger">Challenger</OPTION>
        </td>
        
        <td>
            <input type="text" placeholder="50%" name="winrate_j3" maxlength="3">
        </td>
        
        <td>
            <input type="text" name="main1_j3" value="XXX"><br>
            <input type="text" name="main2_j3" value="XXX"><br>
            <input type="text" name="main3_j3" value="XXX"><br>
        </td>
       
        <td>
            <input type="text"name="winrate_main1_j3"placeholder="50%" value="XXX"><br>
            <input type="text"name="winrate_main2_j3"placeholder="50%" value="XXX"><br>
            <input type="text"name="winrate_main3_j3"placeholder="50%" value="XXX">
        </td>
        <td>
            <input type="text" name="opgg_j3" value="http://euw.op.gg/summoner/userName=" id="case_opgg">
        </td>
    </tr>
     <!-- J4 ------------------------------------------------------------------------------------------------------------------------------------------------------>
    <tr>
        <th>Joueurs4</th>
        <td>
            <input type="text" placeholder="Joueurs 4" name="nom_joueur_j4">
        </td>
        
        <td>
            <SELECT name="role_j4"> 
            <OPTION value="adc">Adc</OPTION>
            <OPTION value="top">Top</OPTION>
            <OPTION value="jungle">Jungle</OPTION>
            <OPTION value="mid">Mid</OPTION>
            <OPTION value="support">Support</OPTION>
        </td>
       
        <td>
        <SELECT name="soloduo_j4">
            <OPTION value="unranked">Unranked</OPTION> 
            <OPTION value="fer 4">Fer 4</OPTION>
            <OPTION value="fer 3">Fer 3</OPTION>
            <OPTION value="fer 2">Fer 2</OPTION>
            <OPTION value="fer 1">Fer 1</OPTION>
            <OPTION value="bronze 4">Bronze 4</OPTION>
            <OPTION value="bronze 3">Bronze 3</OPTION>
            <OPTION value="bronze 2">Bronze 2</OPTION>
            <OPTION value="bronze 1">Bronze 1</OPTION>
            <OPTION value="silver 4">Silver 4</OPTION>
            <OPTION value="silver 3">Silver 3</OPTION>
            <OPTION value="silver 2">Silver 2</OPTION>
            <OPTION value="silver 1">Silver 1</OPTION>
            <OPTION value="gold 4">Gold 4</OPTION>
            <OPTION value="gold 3">Gold 3</OPTION>
            <OPTION value="gold 2">Gold 2</OPTION>
            <OPTION value="gold 1">Gold 1</OPTION>
            <OPTION value="platine 4">Platine 4</OPTION>
            <OPTION value="platine 3">Platine 3</OPTION>
            <OPTION value="platine 2">Platine 2</OPTION>
            <OPTION value="platine 1">Platine 1</OPTION>
            <OPTION value="diamant 4">Diamant 4</OPTION>
            <OPTION value="diamant 3">Diamant 3</OPTION>
            <OPTION value="diamant 2">Diamant 2</OPTION>
            <OPTION value="diamant 1">Diamant 1</OPTION>
            <OPTION value="master">Master</OPTION>
            <OPTION value="grand master">Grand master</OPTION>
            <OPTION value="challenger">Challenger</OPTION>
        </td>
       
        <td>
        <SELECT name="flex_j4">
            <OPTION value="unranked">Unranked</OPTION> 
            <OPTION value="fer 4">Fer 4</OPTION>
            <OPTION value="fer 3">Fer 3</OPTION>
            <OPTION value="fer 2">Fer 2</OPTION>
            <OPTION value="fer 1">Fer 1</OPTION>
            <OPTION value="bronze 4">Bronze 4</OPTION>
            <OPTION value="bronze 3">Bronze 3</OPTION>
            <OPTION value="bronze 2">Bronze 2</OPTION>
            <OPTION value="bronze 1">Bronze 1</OPTION>
            <OPTION value="silver 4">Silver 4</OPTION>
            <OPTION value="silver 3">Silver 3</OPTION>
            <OPTION value="silver 2">Silver 2</OPTION>
            <OPTION value="silver 1">Silver 1</OPTION>
            <OPTION value="gold 4">Gold 4</OPTION>
            <OPTION value="gold 3">Gold 3</OPTION>
            <OPTION value="gold 2">Gold 2</OPTION>
            <OPTION value="gold 1">Gold 1</OPTION>
            <OPTION value="platine 4">Platine 4</OPTION>
            <OPTION value="platine 3">Platine 3</OPTION>
            <OPTION value="platine 2">Platine 2</OPTION>
            <OPTION value="platine 1">Platine 1</OPTION>
            <OPTION value="diamant 4">Diamant 4</OPTION>
            <OPTION value="diamant 3">Diamant 3</OPTION>
            <OPTION value="diamant 2">Diamant 2</OPTION>
            <OPTION value="diamant 1">Diamant 1</OPTION>
            <OPTION value="master">Master</OPTION>
            <OPTION value="grand master">Grand master</OPTION>
            <OPTION value="challenger">Challenger</OPTION>
        </td>
        
        <td>
            <input type="text" placeholder="50%" name="winrate_j4" maxlength="3">
        </td>
       
        <td>
            <input type="text" name="main1_j4" value="XXX"><br>
            <input type="text" name="main2_j4" value="XXX"><br>
            <input type="text" name="main3_j4" value="XXX"><br>
        </td>
       
        <td>
            <input type="text"name="winrate_main1_j4"placeholder="50%" value="XXX"><br>
            <input type="text"name="winrate_main2_j4"placeholder="50%" value="XXX"><br>
            <input type="text"name="winrate_main3_j4"placeholder="50%" value="XXX">
        </td>
        <td>
            <input type="text" name="opgg_j4" value="http://euw.op.gg/summoner/userName=" id="case_opgg">
        </td>
    </tr>
     <!-- J5 ------------------------------------------------------------------------------------------------------------------------------------------------------>
    <tr>
        <th>Joueurs5</th>
        <td>
            <input type="text" placeholder="Joueurs 5" name="nom_joueur_j5">
        </td>
       
        <td>
            <SELECT name="role_j5"> 
            <OPTION value="support">Support</OPTION>
            <OPTION value="top">Top</OPTION>
            <OPTION value="jungle">Jungle</OPTION>
            <OPTION value="mid">Mid</OPTION>
            <OPTION value="adc">Adc</OPTION>
        </td>
       
        <td>
        <SELECT name="soloduo_j5">
            <OPTION value="unranked">Unranked</OPTION> 
            <OPTION value="fer 4">Fer 4</OPTION>
            <OPTION value="fer 3">Fer 3</OPTION>
            <OPTION value="fer 2">Fer 2</OPTION>
            <OPTION value="fer 1">Fer 1</OPTION>
            <OPTION value="bronze 4">Bronze 4</OPTION>
            <OPTION value="bronze 3">Bronze 3</OPTION>
            <OPTION value="bronze 2">Bronze 2</OPTION>
            <OPTION value="bronze 1">Bronze 1</OPTION>
            <OPTION value="silver 4">Silver 4</OPTION>
            <OPTION value="silver 3">Silver 3</OPTION>
            <OPTION value="silver 2">Silver 2</OPTION>
            <OPTION value="silver 1">Silver 1</OPTION>
            <OPTION value="gold 4">Gold 4</OPTION>
            <OPTION value="gold 3">Gold 3</OPTION>
            <OPTION value="gold 2">Gold 2</OPTION>
            <OPTION value="gold 1">Gold 1</OPTION>
            <OPTION value="platine 4">Platine 4</OPTION>
            <OPTION value="platine 3">Platine 3</OPTION>
            <OPTION value="platine 2">Platine 2</OPTION>
            <OPTION value="platine 1">Platine 1</OPTION>
            <OPTION value="diamant 4">Diamant 4</OPTION>
            <OPTION value="diamant 3">Diamant 3</OPTION>
            <OPTION value="diamant 2">Diamant 2</OPTION>
            <OPTION value="diamant 1">Diamant 1</OPTION>
            <OPTION value="master">Master</OPTION>
            <OPTION value="grand master">Grand master</OPTION>
            <OPTION value="challenger">Challenger</OPTION>
        </td>
       
        <td>
        <SELECT name="flex_j5">
            <OPTION value="unranked">Unranked</OPTION> 
            <OPTION value="fer 4">Fer 4</OPTION>
            <OPTION value="fer 3">Fer 3</OPTION>
            <OPTION value="fer 2">Fer 2</OPTION>
            <OPTION value="fer 1">Fer 1</OPTION>
            <OPTION value="bronze 4">Bronze 4</OPTION>
            <OPTION value="bronze 3">Bronze 3</OPTION>
            <OPTION value="bronze 2">Bronze 2</OPTION>
            <OPTION value="bronze 1">Bronze 1</OPTION>
            <OPTION value="silver 4">Silver 4</OPTION>
            <OPTION value="silver 3">Silver 3</OPTION>
            <OPTION value="silver 2">Silver 2</OPTION>
            <OPTION value="silver 1">Silver 1</OPTION>
            <OPTION value="gold 4">Gold 4</OPTION>
            <OPTION value="gold 3">Gold 3</OPTION>
            <OPTION value="gold 2">Gold 2</OPTION>
            <OPTION value="gold 1">Gold 1</OPTION>
            <OPTION value="platine 4">Platine 4</OPTION>
            <OPTION value="platine 3">Platine 3</OPTION>
            <OPTION value="platine 2">Platine 2</OPTION>
            <OPTION value="platine 1">Platine 1</OPTION>
            <OPTION value="diamant 4">Diamant 4</OPTION>
            <OPTION value="diamant 3">Diamant 3</OPTION>
            <OPTION value="diamant 2">Diamant 2</OPTION>
            <OPTION value="diamant 1">Diamant 1</OPTION>
            <OPTION value="master">Master</OPTION>
            <OPTION value="grand master">Grand master</OPTION>
            <OPTION value="challenger">Challenger</OPTION>
        </td>
       
        <td>
            <input type="text" placeholder="50%" name="winrate_j5" maxlength="3">
        </td>
      
        <td>
            <input type="text" name="main1_j5" value="XXX"><br>
            <input type="text" name="main2_j5" value="XXX"><br>
            <input type="text" name="main3_j5" value="XXX"><br>
        </td>
       
        <td>
            <input type="text"name="winrate_main1_j5"placeholder="50%" value="XXX"><br>
            <input type="text"name="winrate_main2_j5"placeholder="50%" value="XXX"><br>
            <input type="text"name="winrate_main3_j5"placeholder="50%" value="XXX">
        </td>
        <td>
            <input type="text" name="opgg_j5" value="http://euw.op.gg/summoner/userName=" id="case_opgg">
        </td>
    </tr>
    <tr>
        <td  colspan="9">
            <br>
            <input type="submit" name="nouveaumatch" value="Confirmer" />
        </td>
        </tr>

</table>

</form>

<?php

if (isset($erreur)){
echo $erreur ;}

?>

</body>
</html>

