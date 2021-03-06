<?php
defined('TYPO3_MODE') or die();

// Adding Web>Info module for SEO management
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_info',
    \B13\SeoBasics\BackendModule\SeoModule::class,
    null,
    'LLL:EXT:seo_basics/Resources/Private/Language/db.xml:module.title'
);


// Adding a static template TypoScript configuration from static/ (deprecated)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('seo_basics', 'static', 'Metatags and XML Sitemap (old), simple replaced by new one');

// Adding the static template for new TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('seo_basics', 'Configuration/TypoScript', 'Metatags and XML Sitemap');
