<?php
namespace Brawh\CatalogueBrawh\Controller;

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
 * ProductController
 */
class ProductController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * productRepository
     *
     * @var \Brawh\CatalogueBrawh\Domain\Repository\ProductRepository
     * @inject
     */
    protected $productRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
    }
    
    /**
     * action show
     *
     * @param \Brawh\CatalogueBrawh\Domain\Model\Product $product
     * @return void
     */
    public function showAction(\Brawh\CatalogueBrawh\Domain\Model\Product $product)
    {
        $this->view->assign('product', $product);
    }
    
    /**
     * action focus
     *
     * @return void
     */
    public function focusAction()
    {
        $products = $this->productRepository->findAll();
        // $products = $this->productRepository->findFocus();
        $this->view->assign('products', $products);
    }

}