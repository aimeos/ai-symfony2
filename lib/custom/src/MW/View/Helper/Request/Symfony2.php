<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2014-2015
 * @package MW
 * @subpackage View
 */


namespace Aimeos\MW\View\Helper\Request;


/**
 * View helper class for retrieving data from Symfony2 requests.
 *
 * @package MW
 * @subpackage View
 */
class Symfony2
	extends \Aimeos\MW\View\Helper\Base
	implements \Aimeos\MW\View\Helper\Request\Iface
{
	private $request;


	/**
	 * Initializes the URL view helper.
	 *
	 * @param \Aimeos\MW\View\Iface $view View instance with registered view helpers
	 * @param \Symfony\Component\HttpFoundation\Request $request Symfony2 request object
	 */
	public function __construct( $view, \Symfony\Component\HttpFoundation\Request $request )
	{
		parent::__construct( $view );

		$this->request = $request;
	}


	/**
	 * Returns the request view helper.
	 *
	 * @return \Aimeos\MW\View\Helper\Iface Request view helper
	 */
	public function transform()
	{
		return $this;
	}


	/**
	 * Returns the request body.
	 *
	 * @return string Request body
	 */
	public function getBody()
	{
		return $this->request->getContent();
	}


	/**
	 * Returns the client IP address.
	 *
	 * @return string Client IP address
	 */
	public function getClientAddress()
	{
		return $this->request->getClientIp();
	}


	/**
	 * Returns the current page or route name
	 *
	 * @return string|null Current page or route name
	 */
	public function getTarget()
	{
		return $this->request->get( '_route' );
	}
}
