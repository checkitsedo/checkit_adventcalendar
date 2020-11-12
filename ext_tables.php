<?php

/**
 * General ext_tables file.
 */
if (!\defined('TYPO3_MODE')) {
    die('Access denied.');
}

/**
 * Register Plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'checkit_adventcalendar',
    'Adventcalendar',
    'Adventcalendar with Audio'
);

