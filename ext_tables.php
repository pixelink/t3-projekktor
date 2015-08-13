<?php
/**
 * Created by PhpStorm.
 * User: briezler
 * Date: 10.07.2015
 * Time: 11:52
 * TYPO3 Content Element für den Projekktor Videoplayer
 * http://www.projekktor.com/
 */

// Integrate static TypoScript
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Projekktor Videoplayer');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '
mod {
	wizards.newContentElement.wizardItems.extra {
		header = Erweiterte Inhaltselemente
		elements {
			projekktor {
				icon = ../typo3conf/ext/t3-projekktor/Resources/Public/Images/Backend/Ce/projekktor.png
				title = Projekktor Video Player
				description = Schlanker, schneller Video Player
				tt_content_defValues {
					CType = projekktor
				}
			}
		}
		show = *
	}
}
');