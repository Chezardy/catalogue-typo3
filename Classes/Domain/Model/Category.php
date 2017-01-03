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
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';
    
    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';
    
    /**
     * picture
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     */
    protected $picture = null;
    
    /**
     * parent
     *
     * @var \Brawh\CatalogueBrawh\Domain\Model\Category
     */
    protected $parent = null;
    
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
     * Returns the picture
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     */
    public function getPicture()
    {
        return $this->picture;
    }
    
    /**
     * Sets the picture
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     * @return void
     */
    public function setPicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $picture)
    {
        $this->picture = $picture;
    }
    
    /**
     * Returns the parent
     *
     * @return \Brawh\CatalogueBrawh\Domain\Model\Category $parent
     */
    public function getParent()
    {
        return $this->parent;
    }
    
    /**
     * Sets the parent
     *
     * @param \Brawh\CatalogueBrawh\Domain\Model\Category $parent
     * @return void
     */
    public function setParent(\Brawh\CatalogueBrawh\Domain\Model\Category $parent)
    {
        $this->parent = $parent;
    }

}