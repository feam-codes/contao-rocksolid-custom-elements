<?php
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Custom Elements DCA
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('MadeYourDay\RockSolidCustomElements\CustomElements', 'onloadCallback');
$GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'][] = array('MadeYourDay\RockSolidCustomElements\CustomElements', 'onsubmitCallback');
$GLOBALS['TL_DCA']['tl_content']['fields']['rsce_data'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_content']['rsce_data'],
	'exclude' => true,
	'inputType' => 'rsce_list_hidden',
	'sql' => "mediumblob NULL",
	'save_callback' => array(
		array('MadeYourDay\\RockSolidCustomElements\\CustomElements', 'saveDataCallback'),
	),
);
