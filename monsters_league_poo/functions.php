<?php

require __DIR__ . '/Monsters.php';



function getMonsters()
{
    try {
      $bdd = new PDO('mysql:host=localhost;dbname=monstres;charset=utf8','root','0000');
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

  $req = $bdd->query('SELECT * FROM mymonsters');
  while ($donnees = $req->fetch()) {
    $monsterTemp = new Monster($donnees['name'],$donnees['strength'], $donnees['life'],$donnees['type']);
    $monsterAux[] = $monsterTemp;
  }

  return $monsterAux;
    }
       
function fight(Monster $firstMonster, Monster $secondMonster)
{
    $firstMonsterLife = $firstMonster->getlife();
    $secondMonsterLife = $secondMonster->getlife();

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster->getstrength();
        $secondMonsterLife = $secondMonsterLife - $firstMonster->getstrength();
    }

    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }

    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
}


