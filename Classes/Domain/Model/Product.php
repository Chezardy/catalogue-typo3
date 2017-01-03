<?php
namespace Brawh\CatalogueBrawh\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Bérénice Boulade
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
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Produit
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';
    
    /**
     * releaseDate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $releaseDate = null;
    
    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';
    
    /**
     * price
     *
     * @var float
     * @validate NotEmpty
     */
    protected $price = 0.0;
    
    /**
     * pictures
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     */
    protected $pictures = null;
    
    /**
     * category
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\Category>
     */
    protected $category = null;
    
    /**
     * seller
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\Seller>
     */
    protected $seller = null;
    
    /**
     * caracteristics
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue>
     * @cascade remove
     */
    protected $caracteristics = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->seller = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->caracteristics = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the releaseDate
     *
     * @return \DateTime $releaseDate
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }
    
    /**
     * Sets the releaseDate
     *
     * @param \DateTime $releaseDate
     * @return void
     */
    public function setReleaseDate(\DateTime $releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * Sets the price
     *
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * Returns the pictures
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $pictures
     */
    public function getPictures()
    {
        return $this->pictures;
    }
    
    /**
     * Sets the pictures
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $pictures
     * @return void
     */
    public function setPictures(\TYPO3\CMS\Extbase\Domain\Model\FileReference $pictures)
    {
        $this->pictures = $pictures;
    }
    
    /**
     * Adds a Category
     *
     * @param \Brawh\CatalogueBrawh\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Brawh\CatalogueBrawh\Domain\Model\Category $category)
    {
        $this->category->attach($category);
    }
    
    /**
     * Removes a Category
     *
     * @param \Brawh\CatalogueBrawh\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Brawh\CatalogueBrawh\Domain\Model\Category $categoryToRemove)
    {
        $this->category->detach($categoryToRemove);
    }
    
    /**
     * Returns the category
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\Category> $category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * Sets the category
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\Category> $category
     * @return void
     */
    public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category)
    {
        $this->category = $category;
    }
    
    /**
     * Adds a Seller
     *
     * @param \Brawh\CatalogueBrawh\Domain\Model\Seller $seller
     * @return void
     */
    public function addSeller(\Brawh\CatalogueBrawh\Domain\Model\Seller $seller)
    {
        $this->seller->attach($seller);
    }
    
    /**
     * Removes a Seller
     *
     * @param \Brawh\CatalogueBrawh\Domain\Model\Seller $sellerToRemove The Seller to be removed
     * @return void
     */
    public function removeSeller(\Brawh\CatalogueBrawh\Domain\Model\Seller $sellerToRemove)
    {
        $this->seller->detach($sellerToRemove);
    }
    
    /**
     * Returns the seller
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\Seller> $seller
     */
    public function getSeller()
    {
        return $this->seller;
    }
    
    /**
     * Sets the seller
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\Seller> $seller
     * @return void
     */
    public function setSeller(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $seller)
    {
        $this->seller = $seller;
    }
    
    /**
     * Adds a CaracteristicValue
     *
     * @param \Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue $caracteristic
     * @return void
     */
    public function addCaracteristic(\Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue $caracteristic)
    {
        $this->caracteristics->attach($caracteristic);
    }
    
    /**
     * Removes a CaracteristicValue
     *
     * @param \Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue $caracteristicToRemove The CaracteristicValue to be removed
     * @return void
     */
    public function removeCaracteristic(\Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue $caracteristicToRemove)
    {
        $this->caracteristics->detach($caracteristicToRemove);
    }
    
    /**
     * Returns the caracteristics
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue> $caracteristics
     */
    public function getCaracteristics()
    {
        return $this->caracteristics;
    }
    
    /**
     * Sets the caracteristics
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\CaracteristicValue> $caracteristics
     * @return void
     */
    public function setCaracteristics(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $caracteristics)
    {
        $this->caracteristics = $caracteristics;
    }

}