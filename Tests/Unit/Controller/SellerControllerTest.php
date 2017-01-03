<?php
namespace Brawh\CatalogueBrawh\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Bérénice Boulade 
 *  			Romain Cerato 
 *  			Arnaud Bonnet 
 *  			Wassek Al Chaid 
 *  			Hugo Triay 
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class Brawh\CatalogueBrawh\Controller\SellerController.
 *
 * @author Bérénice Boulade 
 * @author Romain Cerato 
 * @author Arnaud Bonnet 
 * @author Wassek Al Chaid 
 * @author Hugo Triay 
 */
class SellerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Brawh\CatalogueBrawh\Controller\SellerController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Brawh\\CatalogueBrawh\\Controller\\SellerController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllSellersFromRepositoryAndAssignsThemToView()
	{

		$allSellers = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$sellerRepository = $this->getMock('Brawh\\CatalogueBrawh\\Domain\\Repository\\SellerRepository', array('findAll'), array(), '', FALSE);
		$sellerRepository->expects($this->once())->method('findAll')->will($this->returnValue($allSellers));
		$this->inject($this->subject, 'sellerRepository', $sellerRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('sellers', $allSellers);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenSellerToView()
	{
		$seller = new \Brawh\CatalogueBrawh\Domain\Model\Seller();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('seller', $seller);

		$this->subject->showAction($seller);
	}
}
