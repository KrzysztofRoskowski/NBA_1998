<?php declare(strict_types=1);

namespace Dictionary;

interface StatisticsDictionary
{
    /*
     * Imię i nazwisko postaci
     */
    const NAME = 'name';
    /*
     * Pozycja w zespole, na razie liczona od 1 do 3, z czym im wyższa, tym bliżej kosza gra zawodnik
     */
    const POSITION_IN_TEAM = 'POS';
    /*
     * Ilość prób rzutów za 3 punkty na mecz, statystyka porównywana z TWO_POINT_ATTEMPTS
     */
    const THREE_POINT_ATTEMPTS = '3PA';
    /*
     * Procentowa skuteczność rzutów za 3 punkty
     */
    const THREE_POINT_EFFICIENCY = '3P%';
    /*
     * Ilość prób rzutów za 2 punkty na mecz, statystyka porównywana z THREE_POINT_ATTEMPTS
     */
    const TWO_POINT_ATTEMPTS = '2PA';
    /*
     * Procentowa skuteczność rzutów za 2 punkty
     */
    const TWO_POINT_EFFICIENCY = '2P%';
    /*
     * Ilość zbiórek na mecz, jeśli jest się stroną atakującą
     */
    const OFFENSIVE_REBOUNDS = 'ORB';
    /*
     * Ilość zbiórek na mecz, jeśli jest się stroną broniącą
     */
    const DEFENSIVE_REBOUNDS = 'DRB';
    /*
     * Ilość asyst na mecz przy zdobyciu punktów, jeśli podało się trafiającemu, wykorzystywane tylko w grach drużynowych
     * Porównywane z POINTS będzie decydowało, czy gracz rzuci czy poda
     */
    const ASSISTS = 'AST';
    /*
     * Ilość przechwytów piłki na mecz, gdy jest się stroną broniącą, statystyka porównywana z TURNOVERS
     */
    const STEALS = 'STL';
    /*
     * Ilość bloków piłki na mecz, gdy jest się stroną broniącą, brana pod uwagę, jak atakujący wykonuje rzut
     * Statystyka ta ma być brana pod uwagę przed testem, czy rzut był skuteczny
     */
    const BLOCKS = 'BLK';
    /*
     * Ilość strat piłki na mecz, statystyka porównywana z STEALS
     */
    const TURNOVERS = 'TOV';
    /*
     * Ilość zdobytych punktów na mecz, wykorzystywane tylko w grach drużynowych
     * Porównywane z ASSISTS będzie decydowało, czy gracz rzuci czy poda
     */
    const POINTS = 'PTS';
}