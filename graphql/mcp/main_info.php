<?php
/**
 *
 * Graphql. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Alexander Forselius, http://buddhalow.se
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace buddhalow\graphql\mcp;

/**
 * Graphql MCP module info.
 */
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\buddhalow\graphql\mcp\main_module',
			'title'		=> 'MCP_DEMO_TITLE',
			'modes'		=> array(
				'front'	=> array(
					'title'	=> 'MCP_DEMO',
					'auth'	=> 'ext_buddhalow/graphql',
					'cat'	=> array('MCP_DEMO_TITLE')
				),
			),
		);
	}
}
