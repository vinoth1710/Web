
<?php 

require __DIR__ . '/functions.php';

$monsters = getMonsters();



if (!isset($_POST['monster'])) { //permet de savoir si la variable monster est définie
    header('Location: /index.php?error=bad_ships'); // renvoyer vers la page indiquée
    die;
}


$monstertemp=$_POST['monster']; 
echo($monstertemp);

if (is_null($monstertemp)) { //si la variable monstertemp vaut null
    header('Location: /index.php?error=missing_data'); //renvoyer vers la page indiquée 
    die;
}


try{
	$db = new PDO('mysql:host=localhost;dbname=monstres', 'root', '0000'); //connexion a notre bdd
}
catch(Exception $e){ // on lance une exception si on arrive pas a se connecter
	die("Failed to connect to database".$e->getMessage());
}

$myPDO=$db->query("DELETE FROM `mymonsters` WHERE  `mymonsters`.`name`='".$monstertemp."'");//requete sql pour supprimer un monstre de notre bdd


header('Location:index.php'); 
die;

?>
