<?php

namespace Checkitsedo\CheckitAdventcalendar\Controller;

/**
 * This file is part of the "Checkit Adventcalendar" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;



/**
 * Controller of Adventcalendar records
 *
 */
class AdventcalendarController extends ActionController	 {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		
		$adventcalendar['background']['image'] = $this->settings['flexform']['image'];
		$adventcalendar['background']['altText'] = $this->settings['flexform']['altText'];
		$adventcalendar['background']['imageWidth'] = $this->settings['flexform']['imageWidth'];
		$adventcalendar['background']['imageHeight'] = $this->settings['flexform']['imageHeight'];

		$adventcalendar['usemapData']['usemap'] = $this->settings['flexform']['usemap'];

		$adventcalendar['wickets']['1'] = $this->settings['flexform']['wicket1'];
		$adventcalendar['wickets']['2'] = $this->settings['flexform']['wicket2'];
		$adventcalendar['wickets']['3'] = $this->settings['flexform']['wicket3'];
		$adventcalendar['wickets']['4'] = $this->settings['flexform']['wicket4'];
		$adventcalendar['wickets']['5'] = $this->settings['flexform']['wicket5'];
		$adventcalendar['wickets']['6'] = $this->settings['flexform']['wicket6'];
		$adventcalendar['wickets']['7'] = $this->settings['flexform']['wicket7'];
		$adventcalendar['wickets']['8'] = $this->settings['flexform']['wicket8'];
		$adventcalendar['wickets']['9'] = $this->settings['flexform']['wicket9'];
		$adventcalendar['wickets']['10'] = $this->settings['flexform']['wicket10'];
		$adventcalendar['wickets']['11'] = $this->settings['flexform']['wicket11'];
		$adventcalendar['wickets']['12'] = $this->settings['flexform']['wicket12'];
		$adventcalendar['wickets']['13'] = $this->settings['flexform']['wicket13'];
		$adventcalendar['wickets']['14'] = $this->settings['flexform']['wicket14'];
		$adventcalendar['wickets']['15'] = $this->settings['flexform']['wicket15'];
		$adventcalendar['wickets']['16'] = $this->settings['flexform']['wicket16'];
		$adventcalendar['wickets']['17'] = $this->settings['flexform']['wicket17'];
		$adventcalendar['wickets']['18'] = $this->settings['flexform']['wicket18'];
		$adventcalendar['wickets']['19'] = $this->settings['flexform']['wicket19'];
		$adventcalendar['wickets']['20'] = $this->settings['flexform']['wicket20'];
		$adventcalendar['wickets']['21'] = $this->settings['flexform']['wicket21'];
		$adventcalendar['wickets']['22'] = $this->settings['flexform']['wicket22'];
		$adventcalendar['wickets']['23'] = $this->settings['flexform']['wicket23'];
		$adventcalendar['wickets']['24'] = $this->settings['flexform']['wicket24'];

		//rebuild image-map
		$imageMapArrTemp = $this->settings['flexform']['imageMap'];
		$imageMapArr = \TYPO3\CMS\Core\Utility\GeneralUtility::xml2tree($imageMapArrTemp);
		$imageMapAreaArr = array();
		$imageMapAreaArr = $imageMapArr['map']['0']['ch']['area'];

		$i=1;
		foreach($imageMapAreaArr as $area){
			$areaData = $area['attrs'];

			$imageMapAreaArr[$i]['shape'] = $areaData['shape'];
			$imageMapAreaArr[$i]['coords'] = $areaData['coords'];
			$imageMapAreaArr[$i]['style'] = $areaData['style'];
			$imageMapAreaArr[$i]['id'] = $adventcalendar['wickets'][$i];
			$imageMapAreaArr[$i]['alt'] = $areaData['alt'];
			
			$i++;
		}

		$adventcalendar['usemapData']['imageMapAreas'] = $imageMapAreaArr;

		//include necessary js / css if confugured via ces flexform
    $this->addJqueryLibrary();
    
  	$this->view->assign('adventcalendar', $adventcalendar);
		$this->view->assign('debug', $adventcalendar);
	}

	/**
	 * Adds the jquery library
	 *
	 * @return			The correct header script part for including the jquery library - if necessary
	 */
	public function addJqueryLibrary(){
		// checks if jquery is loaded
    if (typeof jQuery != 'undefined') {
      $GLOBALS['TSFE']->getPageRenderer()->addJsFooterFile(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('checkit_adventcalendar') . 'Resources/Public/JavaScript/checkit_adventcalendar.js', $compress = FALSE, $forceOnTop = FALSE, $allWrap = '');
      $GLOBALS['TSFE']->getPageRenderer()->addJsFooterFile(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('checkit_adventcalendar') . 'Resources/Public/JavaScript/jquery.rwdImageMaps.min.js', $compress = FALSE, $forceOnTop = FALSE, $allWrap = '');
    } else {
      $GLOBALS['TSFE']->getPageRenderer()->addJsFooterFile(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('checkit_adventcalendar') . 'Resources/Public/JavaScript/jquery.min.js', $compress = FALSE, $forceOnTop = FALSE, $allWrap = '');
      $GLOBALS['TSFE']->getPageRenderer()->addJsFooterFile(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('checkit_adventcalendar') . 'Resources/Public/JavaScript/checkit_adventcalendar.js', $compress = FALSE, $forceOnTop = FALSE, $allWrap = '');
      $GLOBALS['TSFE']->getPageRenderer()->addJsFooterFile(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('checkit_adventcalendar') . 'Resources/Public/JavaScript/jquery.rwdImageMaps.min.js', $compress = FALSE, $forceOnTop = FALSE, $allWrap = '');
    }
