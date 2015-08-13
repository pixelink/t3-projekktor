<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}
/**
 * Created by PhpStorm.
 * User: briezler
 * Date: 10.07.2015
 * Time: 11:57
 */

$tca = array(
    'types' => array(
        'projekktor' => array(
            'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
	header;Headline,
	subheader;Subheadline,
	image;Preview Image,
	controls;Show Player Controls,
	width;Width,
	height;Height,
	rtmp;RTMP URL,
	m3u;m3u URL,
	another;Alternative Stream URL,
	--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
	--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended'
        )
    ),
    'columns' => array(
        'CType' => array(
            'config' => array(
                'items' => array(
                    'projekktor' => array(
                        'Projekktor Videoplayer',
                        'projekktor',
                        'EXT:t3-projekktor/Resources/Public/Images/Backend/Ce/Projekktor.png'
                    )
                )
            )
        ),
        'controls' => array(
            'label' => 'Show Controls',
            'config' => array(
                'type' => 'check'
            )
        ),
        'width' => array(
            'label' => 'Player width',
            'config' => array(
                'type' => 'input',
                'size' => 10,
                'eval' => 'num'
            )
        ),
        'height' => array(
            'label' => 'Player height',
            'config' => array(
                'type' => 'input',
                'size' => 10,
                'eval' => 'num'
            )
        ),
        'rtmp' => array(
            'label' => 'RTMP URL',
            'config' => array(
                'type' => 'input'

            )
        ),
        'm3u' => array(
            'label' => 'M3U URL',
            'config' => array(
                'type' => 'input'
            )
        ),
        'another' => array(
            'label' => 'Another alternative URL',
            'config' => array(
                'type' => 'input'
            )
        ),

    )
);

$GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);