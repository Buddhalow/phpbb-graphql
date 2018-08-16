<?php
/**
 *
 * Graphql. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Alexander Forselius, http://buddhalow.se
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace buddhalow\graphql\acp;

/**
 * Graphql ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\buddhalow\graphql\acp\main_module',
			'title'		=> 'ACP_DEMO_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_DEMO',
					'auth'	=> 'ext_buddhalow/graphql && acl_a_board',
					'cat'	=> array('ACP_DEMO_TITLE')
				),
			),
		);
	}
}
