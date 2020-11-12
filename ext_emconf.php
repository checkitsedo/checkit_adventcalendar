<?php

/**
 * $EM_CONF.
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Adventcalendar with Audio-Files',
    'description' => 'Shows a Adventcalendar in the Frontend with daily Audio-Files',
    'category' => 'plugin',
    'author' => 'Dominik Senti',
    'author_email' => 'info@senti.lu',
    'author_company' => 'checkit senti.lu',
    'version' => '0.0.1',
    'state' => 'beta',
    'clearcacheonload' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'php' => '7.2.0-7.4.99',
            'autoloader' => '6.0.0-6.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Checkitsedo\\CheckitAdventcalendar\\' => 'Classes/',
        ],
    ],
];

