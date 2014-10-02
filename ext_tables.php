<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}


/*
 * TYPOSCRIPT
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'TRB CE Textpic');


/*
 * PAGE CONFIG
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:'.$_EXTKEY.'/Configuration/Page/">');
