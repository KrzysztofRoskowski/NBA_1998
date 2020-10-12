<?php declare(strict_types=1);

namespace GameMechanics\OnePlayerMoves;

use Dictionaries\StatisticsDictionary;

class Throws
{
    const TWO_POINT_SHOT = "rzut za 2";
    const THREE_POINT_SHOT = "rzut za 3";

    /**
     * @param $player
     * @return string
     */
    public function playerDecidesHowToShoot($player)
    {
        $twoPointDecision = $player[StatisticsDictionary::TWO_POINT_ATTEMPTS] + rand(1, 20);
        $threePointDecision = $player[StatisticsDictionary::THREE_POINT_ATTEMPTS] + rand(1, 20);

        if ($twoPointDecision > $threePointDecision) {
            $throwDecision = self::TWO_POINT_SHOT;
        } else {
            $throwDecision = self::THREE_POINT_SHOT;
        }

        return $throwDecision;
    }

    /**
     * @param $player
     * @param $throwDecision
     * @return int
     */
    public function throwTheBall($player, $throwDecision)
    {
        switch ($throwDecision) {
            case self::TWO_POINT_SHOT:
                if (($player[StatisticsDictionary::TWO_POINT_EFFICIENCY]) <= rand(0, 1)) {
                    $throwResult = 2;

                    echo $player[StatisticsDictionary::NAME] . " trafia za " . $throwResult . " punkty";
                } else {
                    $throwResult = 0;

                    echo $player[StatisticsDictionary::NAME] . " pudłuje!";
                }
                break;
            case self::THREE_POINT_SHOT:
                if (($player[StatisticsDictionary::THREE_POINT_EFFICIENCY]) <= rand(0, 1)) {
                    $throwResult = 3;

                    echo $player[StatisticsDictionary::NAME] . " trafia za " . $throwResult . " punkty";
                } else {
                    $throwResult = 0;

                    echo $player[StatisticsDictionary::NAME] . " pudłuje!";
                }
                break;
            default:
                $throwResult = 0;

                echo $player[StatisticsDictionary::NAME] . " przekracza czas na rzut...";
        }

        return $throwResult;
    }

    /**
     * @param $player
     */
    public function singleThrowDescription($player)
    {
        $throws = new Throws();

        $throwDecision = $throws->playerDecidesHowToShoot($player);

        echo "<a>" . $player[StatisticsDictionary::NAME] . " wykonuje " . $throwDecision . "</a>";
        echo "<br/><br/>";
        $throws->throwTheBall($player, $throwDecision);
        echo "<br/><br/>";
    }
}