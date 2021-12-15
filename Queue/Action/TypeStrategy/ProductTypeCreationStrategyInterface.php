<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Queue\Action\TypeStrategy;

use Magento\Catalog\Api\Data\ProductInterface;

/**
 * Interface ProductTypeCreationStrategyInterface
 */
interface ProductTypeCreationStrategyInterface
{
    /**
     * @param ProductInterface $product
     *
     * @return ProductInterface
     */
    public function execute(ProductInterface $product): ProductInterface;
}
