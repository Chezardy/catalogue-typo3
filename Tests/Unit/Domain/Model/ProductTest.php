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
 * Test case for class \Brawh\CatalogueBrawh\Domain\Model\Product.
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
class ProductTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Brawh\CatalogueBrawh\Domain\Model\Product
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Brawh\CatalogueBrawh\Domain\Model\Product();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName()
	{
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getReleaseDateReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getReleaseDate()
		);
	}

	/**
	 * @test
	 */
	public function setReleaseDateForDateTimeSetsReleaseDate()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setReleaseDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'releaseDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPriceReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getPrice()
		);
	}

	/**
	 * @test
	 */
	public function setPriceForFloatSetsPrice()
	{
		$this->subject->setPrice(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'price',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getPicturesReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPictures()
		);
	}

	/**
	 * @test
	 */
	public function setPicturesForFileReferenceSetsPictures()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setPictures($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'pictures',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForCategory()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryForObjectStorageContainingCategorySetsCategory()
	{
		$category = new \Brawh\CatalogueBrawh\Domain\Model\Category();
		$objectStorageHoldingExactlyOneCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->subject->setCategory($objectStorageHoldingExactlyOneCategory);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCategory,
			'category',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategory()
	{
		$category = new \Brawh\CatalogueBrawh\Domain\Model\Category();
		$categoryObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$categoryObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($category));
		$this->inject($this->subject, 'category', $categoryObjectStorageMock);

		$this->subject->addCategory($category);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategory()
	{
		$category = new \Brawh\CatalogueBrawh\Domain\Model\Category();
		$categoryObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$categoryObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($category));
		$this->inject($this->subject, 'category', $categoryObjectStorageMock);

		$this->subject->removeCategory($category);

	}

	/**
	 * @test
	 */
	public function getSellerReturnsInitialValueForSeller()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getSeller()
		);
	}

	/**
	 * @test
	 */
	public function setSellerForObjectStorageContainingSellerSetsSeller()
	{
		$seller = new \Brawh\CatalogueBrawh\Domain\Model\Seller();
		$objectStorageHoldingExactlyOneSeller = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneSeller->attach($seller);
		$this->subject->setSeller($objectStorageHoldingExactlyOneSeller);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneSeller,
			'seller',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addSellerToObjectStorageHoldingSeller()
	{
		$seller = new \Brawh\CatalogueBrawh\Domain\Model\Seller();
		$sellerObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$sellerObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($seller));
		$this->inject($this->subject, 'seller', $sellerObjectStorageMock);

		$this->subject->addSeller($seller);
	}

	/**
	 * @test
	 */
	public function removeSellerFromObjectStorageHoldingSeller()
	{
		$seller = new \Brawh\CatalogueBrawh\Domain\Model\Seller();
		$sellerObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$sellerObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($seller));
		$this->inject($this->subject, 'seller', $sellerObjectStorageMock);

		$this->subject->removeSeller($seller);

	}

	/**
	 * @test
	 */
	public function getCaracteristicsReturnsInitialValueForCaracteristicValue()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCaracteristics()
		);
	}

	/**
	 * @test
	 */
	public function setCaracteristicsForObjectStorageContainingCaracteristicValueSetsCaracteristics()
	{
		$caracteristic = new \Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue();
		$objectStorageHoldingExactlyOneCaracteristics = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCaracteristics->attach($caracteristic);
		$this->subject->setCaracteristics($objectStorageHoldingExactlyOneCaracteristics);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCaracteristics,
			'caracteristics',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCaracteristicToObjectStorageHoldingCaracteristics()
	{
		$caracteristic = new \Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue();
		$caracteristicsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$caracteristicsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($caracteristic));
		$this->inject($this->subject, 'caracteristics', $caracteristicsObjectStorageMock);

		$this->subject->addCaracteristic($caracteristic);
	}

	/**
	 * @test
	 */
	public function removeCaracteristicFromObjectStorageHoldingCaracteristics()
	{
		$caracteristic = new \Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue();
		$caracteristicsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$caracteristicsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($caracteristic));
		$this->inject($this->subject, 'caracteristics', $caracteristicsObjectStorageMock);

		$this->subject->removeCaracteristic($caracteristic);

	}
}
