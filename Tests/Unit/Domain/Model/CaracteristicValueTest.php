<?php

namespace Brawh\CatalogueBrawh\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Bérénice Boulade
 *           Romain Cerato
 *           Arnaud Bonnet
 *           Wassek Al Chaid
 *           Hugo Triay
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
 * Test case for class \Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Bérénice Boulade 
 * @author Romain Cerato 
 * @author Arnaud Bonnet 
 * @author Wassek Al Chaid 
 * @author Hugo Triay 
 */
class CaracteristicValueTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getValeurReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getValeur()
		);
	}

	/**
	 * @test
	 */
	public function setValeurForFloatSetsValeur()
	{
		$this->subject->setValeur(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'valeur',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getCaracteristicReturnsInitialValueForCaracteristic()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCaracteristic()
		);
	}

	/**
	 * @test
	 */
	public function setCaracteristicForObjectStorageContainingCaracteristicSetsCaracteristic()
	{
		$caracteristic = new \Brawh\CatalogueBrawh\Domain\Model\Caracteristic();
		$objectStorageHoldingExactlyOneCaracteristic = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCaracteristic->attach($caracteristic);
		$this->subject->setCaracteristic($objectStorageHoldingExactlyOneCaracteristic);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCaracteristic,
			'caracteristic',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCaracteristicToObjectStorageHoldingCaracteristic()
	{
		$caracteristic = new \Brawh\CatalogueBrawh\Domain\Model\Caracteristic();
		$caracteristicObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$caracteristicObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($caracteristic));
		$this->inject($this->subject, 'caracteristic', $caracteristicObjectStorageMock);

		$this->subject->addCaracteristic($caracteristic);
	}

	/**
	 * @test
	 */
	public function removeCaracteristicFromObjectStorageHoldingCaracteristic()
	{
		$caracteristic = new \Brawh\CatalogueBrawh\Domain\Model\Caracteristic();
		$caracteristicObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$caracteristicObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($caracteristic));
		$this->inject($this->subject, 'caracteristic', $caracteristicObjectStorageMock);

		$this->subject->removeCaracteristic($caracteristic);

	}
}
