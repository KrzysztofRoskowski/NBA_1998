<?php declare(strict_types=1);

namespace PlayerStatistics;

interface ChicagoBulls
{
    const TEAM_NAME = 'Chicago Bulls';

    const MICHAEL_JORDAN = [
        'name' => 'Michael Jordan',
        'POS' => 2,
        '3PA' => 1.5,
        '3P%' => 0.238,
        '2PA' => 21.5,
        '2P%' => 0.482,
        'ORB' => 1.6,
        'DRB' => 4.2,
        'AST' => 3.5,
        'STL' => 1.7,
        'BLK' => 0.5,
        'TOV' => 2.3,
        'PTS' => 28.7,
    ];

    const SCOTTIE_PIPPEN = [
        'name' => 'Scottie Pippen',
        'POS' => 1,
        '3PA' => 4.4,
        '3P%' => 0.318,
        '2PA' => 11.6,
        '2P%' => 0.496,
        'ORB' => 1.2,
        'DRB' => 4.0,
        'AST' => 5.8,
        'STL' => 1.8,
        'BLK' => 1.0,
        'TOV' => 2.5,
        'PTS' => 19.1,
    ];

    const DENNIS_RODMAN = [
        'name' => 'Dennis Rodman',
        'POS' => 3,
        '3PA' => 0.3,
        '3P%' => 174,
        '2PA' => 4.2,
        '2P%' => 448,
        'ORB' => 5.3,
        'DRB' => 9.8,
        'AST' => 2.9,
        'STL' => 0.6,
        'BLK' => 0.2,
        'TOV' => 1.8,
        'PTS' => 4.7,
    ];
}