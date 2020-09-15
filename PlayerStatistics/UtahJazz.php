<?php declare(strict_types=1);

namespace PlayerStatistics;

use Dictionary\StatisticsDictionary;

interface UtahJazz
{
    const TEAM_NAME = 'Utah Jazz';

    const KARL_MALONE = [
        StatisticsDictionary::NAME => 'Karl Malone',
        StatisticsDictionary::POSITION_IN_TEAM => 3,
        StatisticsDictionary::THREE_POINT_ATTEMPTS => 0.1,
        StatisticsDictionary::THREE_POINT_EFFICIENCY => 333,
        StatisticsDictionary::TWO_POINT_ATTEMPTS => 18.1,
        StatisticsDictionary::TWO_POINT_EFFICIENCY => 531,
        StatisticsDictionary::OFFENSIVE_REBOUNDS => 2.3,
        StatisticsDictionary::DEFENSIVE_REBOUNDS => 8.0,
        StatisticsDictionary::ASSISTS => 3.9,
        StatisticsDictionary::STEALS => 1.2,
        StatisticsDictionary::BLOCKS => 0.9,
        StatisticsDictionary::TURNOVERS => 3.0,
        StatisticsDictionary::POINTS => 27.0,
    ];

    const JOHN_STOCKTON = [
        StatisticsDictionary::NAME => 'John Stockton',
        StatisticsDictionary::POSITION_IN_TEAM => 1,
        StatisticsDictionary::THREE_POINT_ATTEMPTS => 1.4,
        StatisticsDictionary::THREE_POINT_EFFICIENCY => 429,
        StatisticsDictionary::TWO_POINT_ATTEMPTS => 6.6,
        StatisticsDictionary::TWO_POINT_EFFICIENCY => 550,
        StatisticsDictionary::OFFENSIVE_REBOUNDS => 0.5,
        StatisticsDictionary::DEFENSIVE_REBOUNDS => 2.0,
        StatisticsDictionary::ASSISTS => 8.5,
        StatisticsDictionary::STEALS => 1.4,
        StatisticsDictionary::BLOCKS => 0.2,
        StatisticsDictionary::TURNOVERS => 2.5,
        StatisticsDictionary::POINTS => 12.0,
    ];

    const JEFF_HORNACEK = [
        StatisticsDictionary::NAME => 'Jeff Hornacek',
        StatisticsDictionary::POSITION_IN_TEAM => 2,
        StatisticsDictionary::THREE_POINT_ATTEMPTS => 1.6,
        StatisticsDictionary::THREE_POINT_EFFICIENCY => 441,
        StatisticsDictionary::TWO_POINT_ATTEMPTS => 8.8,
        StatisticsDictionary::TWO_POINT_EFFICIENCY => 489,
        StatisticsDictionary::OFFENSIVE_REBOUNDS => 0.8,
        StatisticsDictionary::DEFENSIVE_REBOUNDS => 2.6,
        StatisticsDictionary::ASSISTS => 4.4,
        StatisticsDictionary::STEALS => 1.4,
        StatisticsDictionary::BLOCKS => 0.2,
        StatisticsDictionary::TURNOVERS => 1.7,
        StatisticsDictionary::POINTS => 4.7,
    ];
}