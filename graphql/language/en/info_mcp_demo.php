<?php
/**
 *
 * Graphql. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Alexander Forselius, http://buddhalow.se
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'MCP_DEMO'				=> 'Front',
	'MCP_DEMO_TITLE'		=> 'Demo Module',
));
