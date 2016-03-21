<?php
/**
 * Created by PhpStorm.
 * User: imjalpreet
 * Date: 21/3/16
 * Time: 11:12 PM
 */

namespace OCA\TestApp\hooks;

class Hooks {

	public static function postCreate($params) {
		//file_put_contents("/var/www/owncloud/data/owncloud_test.log", $params['path']);
		$logger = \OC::$server->getLogger();
		$logger->log('debug', $params['path'], array('app' => 'TestApp'));
	}

	public static function postCreateUser($params) {
		//file_put_contents("/var/www/owncloud/data/owncloud_test.log", $params['uid']);
		$logger = \OC::$server->getLogger();
		$logger->log('debug', $params['uid'], array('app' => 'TestApp'));
	}
}