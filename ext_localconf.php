<?php

/**
 * General ext_localconf file.
 */
if (!\defined('TYPO3_MODE')) {
    die('Access denied.');
}

/**
 * Configure Plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Checkit.checkit_adventcalendar',
    'Adventcalendar',
    [
        'Adventcalendar' => 'list',
    ],
    [
        'Adventcalendar' => 'list',
    ]
);
