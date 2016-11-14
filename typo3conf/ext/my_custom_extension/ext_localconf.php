<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Etobi.' . $_EXTKEY,
        'Example',
        array(
                'Example' => 'index',
        ),
        array(
                'Example' => 'index',
        )
);