<?php declare(strict_types=1);

namespace TheGame;

use PlayerStatistics\ChicagoBulls;
use PlayerStatistics\UtahJazz;

class teamMainPlays
{
    const TEAM1 = ChicagoBulls::class;
    const TEAM2 = UtahJazz::class;

    public function teamStartingGame()
    {
        $teamHome = self::TEAM1;
        $teamAway = self::TEAM2;

        $teamHomeChance = rand(1, 10);
        $teamAwayChance = rand(1, 10);

        if ($teamHomeChance >= $teamAwayChance) {
            $startingTeam = $teamHome;
        } else {
            $startingTeam = $teamAway;
        }

        return $startingTeam;
    }

    public function firstActionOfTheGame()
    {
        $startingTeam = $this->teamStartingGame();

//        $playerStartingTeamAction = $startingTeam->['pos' => 1];
    }

    public function newTeamAction()
    {

    }
}