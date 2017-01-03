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
 * Seller
 */
class Seller extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';
    
    /**
     * website
     *
     * @var string
     * @validate NotEmpty
     */
    protected $website = '';
    
    /**
     * email
     *
     * @var string
     * @validate NotEmpty
     */
    protected $email = '';
    
    /**
     * phoneNumber
     *
     * @var int
     * @validate NotEmpty
     */
    protected $phoneNumber = 0;
    
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
     * Returns the website
     *
     * @return string $website
     */
    public function getWebsite()
    {
        return $this->website;
    }
    
    /**
     * Sets the website
     *
     * @param string $website
     * @return void
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }
    
    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Returns the phoneNumber
     *
     * @return int $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    
    /**
     * Sets the phoneNumber
     *
     * @param int $phoneNumber
     * @return void
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

}