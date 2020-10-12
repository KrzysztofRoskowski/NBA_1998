<html>
<head>
    <title>NBA</title>
</head>
<body>
<h1>NBA</h1>
<br/>
<br/>
<?php

include('PlayerStatistics\ChicagoBulls.php');
include('GameMechanics\OnePlayerMoves\Throws.php');
include('Dictionaries\StatisticsDictionary.php');

use PlayerStatistics\ChicagoBulls;
use GameMechanics\OnePlayerMoves\Throws;
use Dictionaries\StatisticsDictionary;

$throws = new Throws();

$player1 = ChicagoBulls::MICHAEL_JORDAN;
$player2 = ChicagoBulls::SCOTTIE_PIPPEN;
$player1Score = 0;
$player2Score = 0;

echo "<h3>Player 1" . ": " . $player1[StatisticsDictionary::NAME] . "</h3>";
echo "<h3>Player 2" . ": " . $player2[StatisticsDictionary::NAME] . "</h3>";

for ($i = 0; $i < 3; ++$i) {
    $throws->singleThrowDescription($player1);
    $throws->singleThrowDescription($player2);
}

?>
</body>
</html>
