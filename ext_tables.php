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

$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY); 
$pluginSignature = strtolower($extensionName) . '_adventcalendar'; 

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/ControllerActions.xml'); 
