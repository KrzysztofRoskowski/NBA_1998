<?php declare(strict_types=1);

namespace PlayerStatistics;

interface UtahJazz
{
    const TEAM_NAME = 'Utah Jazz';

    const KARL_MALONE = [
        'POS' => 3,
        '3PA' => 0.1,
        '3P%' => 333,
        '2PA' => 18.1,
        '2P%' => 531,
        'ORB' => 2.3,
        'DRB' => 8.0,
        'AST' => 3.9,
        'STL' => 1.2,
        'BLK' => 0.9,
        'TOV' => 3.0,
        'PTS' => 27.0,
    ];

    const JOHN_STOCKTON = [
        'POS' => 1,
        '3PA' => 1.4,
        '3P%' => 429,
        '2PA' => 6.6,
        '2P%' => 550,
        'ORB' => 0.5,
        'DRB' => 2.0,
        'AST' => 8.5,
        'STL' => 1.4,
        'BLK' => 0.2,
        'TOV' => 2.5,
        'PTS' => 12.0,
    ];

    const JEFF_HORNACEK = [
        'POS' => 2,
        '3PA' => 1.6,
        '3P%' => 441,
        '2PA' => 8.8,
        '2P%' => 489,
        'ORB' => 0.8,
        'DRB' => 2.6,
        'AST' => 4.4,
        'STL' => 1.4,
        'BLK' => 0.2,
        'TOV' => 1.7,
        'PTS' => 4.7,
    ];
}