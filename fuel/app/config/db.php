<?php
/**
 * Base Database Config.
 *
 * See the individual environment DB configs for specific config information.
 */

/*
return array(
	'default' => array(
		'type'  => 'mysql',
		'connection'	=> array(
			'hostname'		=> 'localhost',
			'port'			=> '3306',
			'database'		=> 'idea_board_dev',
			'username'		=> 'root',
			'password'		=> 'root',
		),
		'table_prefix' => 'ap_',
	),
);
*/


return array(
	'active' => 'default',

	/**
	 * Base config, just need to set the DSN, username and password in env. config.
	 */
	'default' => array(
		'type'        => 'pdo',
		'connection'  => array(
			'persistent' => false,
		),
		'identifier'   => '',
		'table_prefix' => '',
		'charset'      => 'utf8',
		'enable_cache' => true,
		'profiling'    => false,
	),

	'redis' => array(
		'default' => array(
			'hostname'  => '127.0.0.1',
			'port'      => 6379,
		)
	),

);



