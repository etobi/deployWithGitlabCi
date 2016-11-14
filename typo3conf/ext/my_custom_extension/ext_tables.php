<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// register frontend plugins
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Etobi.' . $_EXTKEY,
        'Example',
        'Example'
);
