<?php

/**
 * General ext_localconf file.
 */
if (!defined('TYPO*_MODE')) {
    die('Access denied.');
}

/**
 * Configure Plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Checkitsedo.checkit_adventcalendar',
    'Adventcalendar',
    [
        'Adventcalendar' => 'show',
    ],
    [
        'Adventcalendar' => 'show',
    ]
);
