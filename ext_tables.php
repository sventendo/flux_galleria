<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'Frontend',
    'Galleria Image & Video Gallery'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Galleria extension for TYPO3');

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fluxgalleria_frontend'] = 'pi_flexform';
\FluidTYPO3\Flux\Core::registerConfigurationProvider('DMF\\FluxGalleria\\Provider\\PluginConfigurationProvider');
