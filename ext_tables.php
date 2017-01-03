<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Brawh.' . $_EXTKEY,
	'Pi1',
	'Catalogue_brawh'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi1.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'catalogue_brawh');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cataloguebrawh_domain_model_product', 'EXT:catalogue_brawh/Resources/Private/Language/locallang_csh_tx_cataloguebrawh_domain_model_product.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cataloguebrawh_domain_model_product');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cataloguebrawh_domain_model_category', 'EXT:catalogue_brawh/Resources/Private/Language/locallang_csh_tx_cataloguebrawh_domain_model_category.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cataloguebrawh_domain_model_category');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cataloguebrawh_domain_model_seller', 'EXT:catalogue_brawh/Resources/Private/Language/locallang_csh_tx_cataloguebrawh_domain_model_seller.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cataloguebrawh_domain_model_seller');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cataloguebrawh_domain_model_caracteristic', 'EXT:catalogue_brawh/Resources/Private/Language/locallang_csh_tx_cataloguebrawh_domain_model_caracteristic.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cataloguebrawh_domain_model_caracteristic');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cataloguebrawh_domain_model_caracteristicvalue', 'EXT:catalogue_brawh/Resources/Private/Language/locallang_csh_tx_cataloguebrawh_domain_model_caracteristicvalue.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cataloguebrawh_domain_model_caracteristicvalue');
