<?php
/**
 *
 * Graphql. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Alexander Forselius, http://buddhalow.se
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace buddhalow\graphql\ucp;

/**
 * Graphql UCP module info.
 */
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\buddhalow\graphql\ucp\main_module',
			'title'		=> 'UCP_DEMO_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'UCP_DEMO',
					'auth'	=> 'ext_buddhalow/graphql',
					'cat'	=> array('UCP_DEMO_TITLE')
				),
			),
		);
	}
}
