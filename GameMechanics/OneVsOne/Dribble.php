<?php declare(strict_types=1);

namespace GameMechanics\OneVsOne;

class dribble
{
    public function dribbleSuccessOrOpponentSteal($player1, $player2)
    {
        $stealChance = $player1['TOV'] + $player2['STL'];
    }
}