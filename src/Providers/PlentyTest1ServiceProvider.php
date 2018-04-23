<?php
namespace PlentyTest1\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class PlentyTest1ServiceProvider
 * @package PlentyTest1\Providers
 */
class PlentyTest1ServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(PlentyTest1RouteServiceProvider::class);
	}
}
