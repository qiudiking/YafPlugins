<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/21 0021
 * Time: 19:45
 */

namespace AtServer;


use Yaf\Request_Abstract;
use Yaf\Response_Abstract;

class myPlugin extends \Yaf\Plugin_Abstract {
	public function routerStartup( Request_Abstract $request, Response_Abstract $response ) {
		parent::routerStartup( $request, $response ); // TODO: Change the autogenerated stub
		//\Yaf\Application::app()->getDispatcher()->getRouter()->addRoute('myRoute',myRoute::instance());
	}

	public function routerShutdown( Request_Abstract $request, Response_Abstract $response ) {
		parent::routerShutdown( $request, $response ); // TODO: Change the autogenerated stub

	}

	private static $instance;

	public static function instance(){
		if(!self::$instance){
		    self::$instance=new self();
		}

		return self::$instance;
	}
}