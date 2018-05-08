<?php
namespace PlentyTest1\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;

/**
 * Class ContentController
 * @package PlentyTest1\Controllers
 */
class ContentController extends Controller
{
	/**
	 * @param Twig $twig
	 * @param LibraryCallContract $libCall
	 * @return string
	 */
	public function sayHello(
		Twig $twig,
		LibraryCallContract $libCall
	)
	{
 
		$packagistFTPResult =
			$libCall->call(
				'PlentyTest1::ftpclient_connector'
			);
		return $twig->render('PlentyTest1::content.hello', $packagistFTPResult);
	}
}
