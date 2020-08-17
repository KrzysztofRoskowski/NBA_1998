<?php declare(strict_types=1);

namespace GameMechanics\OnePlayerMoves;

class Throws
{
    const TWO_POINT_SHOT = "Rzut za 2";
    const THREE_POINT_SHOT = "Rzut za 3";

    /**
     * @param $player
     * @return string
     */
    public function decidePointAttempt($player)
    {
        $twoPointDecision = $player['2PA'] + rand(1, 20);
        $threePointDecision = $player['3PA'] + rand(1, 20);

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
                if (($player['2P%']) <= rand(0, 1)) {
                    $throwResult = 2;

                    echo $player['name'] . " trafia za " . $throwResult . " punkty";
                } else {
                    $throwResult = 0;

                    echo $player['name'] . " pudłuje!";
                }
                break;
            case self::THREE_POINT_SHOT:
                if (($player['3P%']) <= rand(0, 1)) {
                    $throwResult = 3;

                    echo $player['name'] . " trafia za " . $throwResult . " punkty";
                } else {
                    $throwResult = 0;

                    echo $player['name'] . " pudłuje!";
                }
                break;
            default:
                $throwResult = 'Coś poszło nie tak i teraz widownia wybiega na parkiet!';
        }

        return $throwResult;
    }

    /**
     * @param $player
     */
    public function singleThrowDescription($player)
    {
        $throws = new Throws();

        $throwDecision = $throws->decidePointAttempt($player);

        echo "<a>" . $player['name'] . " wykonuje " . $throwDecision . "</a>";
        echo "<br/><br/>";
        $throws->throwTheBall($player, $throwDecision);
        echo "<br/><br/>";
    }
}