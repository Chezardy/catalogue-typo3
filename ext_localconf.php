<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Brawh.' . $_EXTKEY,
	'Pi1',
	array(
		'Product' => 'list, show, focus',
		'Category' => 'list, show',
		'Seller' => 'show',
		
	),
	// non-cacheable actions
	array(
		'Product' => '',
		'Category' => '',
		'Seller' => '',
		
	)
);
