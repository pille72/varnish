<?php
namespace Z7\Varnish\Hooks;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class ClearCacheMenu implements \TYPO3\CMS\Backend\Toolbar\ClearCacheActionsHookInterface {

	/**
	 * Modifies CacheMenuItems array
	 *
	 * @param array $cacheActions Array of CacheMenuItems
	 * @param array $optionValues Array of AccessConfigurations-identifiers (typically used by userTS with options.clearCache.identifier)
	 * @return void
	 */
	public function manipulateCacheActions(&$cacheActions, &$optionValues) {
		$cacheActions[] = array(
			'id' => 'varnish',
			'title' => LocalizationUtility::translate('LLL:EXT:varnish/Resources/Private/Language/locallang.xlf:hooks.cache.title', $_EXTKEY),
			'href' => 'ajax.php?ajaxID=varnish::banAll',
			'icon' => '<img src="/' . $GLOBALS['TYPO3_LOADED_EXT']['varnish']['siteRelPath'] . 'Resources/Public/Icons/ClearVarnish.svg" width="16" height="16" />'
		);
	}
}