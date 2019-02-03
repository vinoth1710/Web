
<?php 

require __DIR__ . '/functions.php';

$monsters = getMonsters();



/*if (is_null($monster)) {
    header('Location: /index.php?error=missing_data');
    die;
}
*/

if (!isset($_POST['monster'])) {
    header('Location: /index.php?error=bad_ships');
    die;
}


$monstertemp=$_POST['monster'];
echo($monstertemp);

if (is_null($monstertemp)) {
    header('Location: /index.php?error=missing_data');
    die;
}


try{
	$db = new PDO('mysql:host=localhost;dbname=monstres', 'root', '0000');
}
catch(Exception $e){
	die("Failed to connect to database".$e->getMessage());
}

$myPDO=$db->query("DELETE FROM `mymonsters` WHERE  `mymonsters`.`name`='".$monstertemp."'");

//if(is_null($myPDO)) echo("erreur");
	
//$myPDO->bindValue(':name', $monster);

//if($result= $myPDO->execute()) echo("Monstre supprimé");

header('Location:index.php');
die;

?>
