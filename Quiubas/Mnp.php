<?php

namespace Quiubas;

class MNP extends Base {
	/**
	 * @param string Base path
	 */
	public static $base = 'mnp';
	/**
	 * @param string Action path
	 */
	public static $action = 'mnp/{number}';
	/**
	 * @param string $number
	 * @param array $params Parameters
	 */
	public static function getData( $number, $params = false ) {
		return \Quiubas\Network::get( array( static::$action,  $number), $params );
	}
}