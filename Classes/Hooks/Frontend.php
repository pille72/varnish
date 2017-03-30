<?php
namespace Z7\Varnish\Hooks;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class Frontend
{

    /**
     * Hook into page rendering to add headers…
     *
     * @param array $parameters
     * @param \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController $parent
     * @return void
     */
    public function sendHeader(array $parameters, \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController $parent)
    {
        header('TYPO3-Pid: ' . $parent->id);
        header('TYPO3-Sitename: ' . GeneralUtility::hmac($GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename']));
    }
}
