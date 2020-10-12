<?php declare(strict_types=1);

namespace PlayerStatistics;

use Dictionaries\StatisticsDictionary;

interface ChicagoBulls
{
    const TEAM_NAME = 'Chicago Bulls';

    const MICHAEL_JORDAN = [
        StatisticsDictionary::NAME => 'Michael Jordan',
        StatisticsDictionary::POSITION_IN_TEAM => 2,
        StatisticsDictionary::THREE_POINT_ATTEMPTS => 1.5,
        StatisticsDictionary::THREE_POINT_EFFICIENCY => 0.238,
        StatisticsDictionary::TWO_POINT_ATTEMPTS => 21.5,
        StatisticsDictionary::TWO_POINT_EFFICIENCY => 0.482,
        StatisticsDictionary::OFFENSIVE_REBOUNDS => 1.6,
        StatisticsDictionary::DEFENSIVE_REBOUNDS => 4.2,
        StatisticsDictionary::ASSISTS => 3.5,
        StatisticsDictionary::STEALS => 1.7,
        StatisticsDictionary::BLOCKS => 0.5,
        StatisticsDictionary::TURNOVERS => 2.3,
        StatisticsDictionary::POINTS => 28.7,
    ];

    const SCOTTIE_PIPPEN = [
        StatisticsDictionary::NAME => 'Scottie Pippen',
        StatisticsDictionary::POSITION_IN_TEAM => 1,
        StatisticsDictionary::THREE_POINT_ATTEMPTS => 4.4,
        StatisticsDictionary::THREE_POINT_EFFICIENCY => 0.318,
        StatisticsDictionary::TWO_POINT_ATTEMPTS => 11.6,
        StatisticsDictionary::TWO_POINT_EFFICIENCY => 0.496,
        StatisticsDictionary::OFFENSIVE_REBOUNDS => 1.2,
        StatisticsDictionary::DEFENSIVE_REBOUNDS => 4.0,
        StatisticsDictionary::ASSISTS => 5.8,
        StatisticsDictionary::STEALS => 1.8,
        StatisticsDictionary::BLOCKS => 1.0,
        StatisticsDictionary::TURNOVERS => 2.5,
        StatisticsDictionary::POINTS => 19.1,

    ];

    const DENNIS_RODMAN = [
        StatisticsDictionary::NAME => 'Dennis Rodman',
        StatisticsDictionary::POSITION_IN_TEAM => 3,
        StatisticsDictionary::THREE_POINT_ATTEMPTS => 0.3,
        StatisticsDictionary::THREE_POINT_EFFICIENCY => 174,
        StatisticsDictionary::TWO_POINT_ATTEMPTS => 4.2,
        StatisticsDictionary::TWO_POINT_EFFICIENCY => 448,
        StatisticsDictionary::OFFENSIVE_REBOUNDS => 5.3,
        StatisticsDictionary::DEFENSIVE_REBOUNDS => 9.8,
        StatisticsDictionary::ASSISTS => 2.9,
        StatisticsDictionary::STEALS => 0.6,
        StatisticsDictionary::BLOCKS => 0.2,
        StatisticsDictionary::TURNOVERS => 1.8,
        StatisticsDictionary::POINTS => 4.7,
    ];
}