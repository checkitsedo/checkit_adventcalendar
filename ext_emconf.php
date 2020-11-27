<?php

/**
 * $EM_CONF.
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Responsive Adventcalendar',
    'description' => 'A customizable responsive advent calendar show Modals based on pages as content placeholders for the several wickets',
    'category' => 'plugin',
    'author' => 'Dominik Senti',
    'author_email' => 'info@senti.lu',
    'version' => '0.9.0',
    'state' => 'stable',
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
            'Checkit\\CheckitAdventcalendar\\' => 'Classes/',
        ],
    ],
];
