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
 * CaracteristicValue
 */
class CaracteristicValue extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * valeur
     *
     * @var float
     * @validate NotEmpty
     */
    protected $valeur = 0.0;
    
    /**
     * caracteristic
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\Caracteristic>
     * @cascade remove
     */
    protected $caracteristic = null;
    
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
        $this->caracteristic = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the valeur
     *
     * @return float $valeur
     */
    public function getValeur()
    {
        return $this->valeur;
    }
    
    /**
     * Sets the valeur
     *
     * @param float $valeur
     * @return void
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }
    
    /**
     * Adds a Caracteristic
     *
     * @param \Brawh\CatalogueBrawh\Domain\Model\Caracteristic $caracteristic
     * @return void
     */
    public function addCaracteristic(\Brawh\CatalogueBrawh\Domain\Model\Caracteristic $caracteristic)
    {
        $this->caracteristic->attach($caracteristic);
    }
    
    /**
     * Removes a Caracteristic
     *
     * @param \Brawh\CatalogueBrawh\Domain\Model\Caracteristic $caracteristicToRemove The Caracteristic to be removed
     * @return void
     */
    public function removeCaracteristic(\Brawh\CatalogueBrawh\Domain\Model\Caracteristic $caracteristicToRemove)
    {
        $this->caracteristic->detach($caracteristicToRemove);
    }
    
    /**
     * Returns the caracteristic
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\Caracteristic> $caracteristic
     */
    public function getCaracteristic()
    {
        return $this->caracteristic;
    }
    
    /**
     * Sets the caracteristic
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Brawh\CatalogueBrawh\Domain\Model\Caracteristic> $caracteristic
     * @return void
     */
    public function setCaracteristic(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $caracteristic)
    {
        $this->caracteristic = $caracteristic;
    }

}