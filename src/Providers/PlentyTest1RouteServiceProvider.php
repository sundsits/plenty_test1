<?php
namespace PlentyTest1\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class PlentyTest1RouteServiceProvider
 * @package PlentyTest1\Providers
 */
class PlentyTest1RouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('hello', 'PlentyTest1\Controllers\ContentController@sayHello');
	}

}
