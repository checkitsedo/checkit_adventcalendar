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

/**
 * Register Icons
 * Icon for plugin selection in content element will be loaded automatically
 * if to be found in /Resources/Public/Icons/Extension.svg
 * !! If you’re using SVG files, make sure they are 16×16 pixel in size. Even though SVG is scalable, TYPO3 9 won’t scale them down (whereas TYPO3 8 did)!
 */
if (TYPO3_MODE === 'BE') {
    $ext = 'checkit_adventcalendar';
    $icons = [
        $ext . '-wizard-icon' => 'Extension.svg',
    ];
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons AS $id => $filename) {
            $iconRegistry->registerIcon(
                $id,
                $iconRegistry->detectIconProvider($filename),
                ['source' => 'EXT:' . $ext . '/Resources/Public/Icons/' . $filename]
            );
        }
    }
}
