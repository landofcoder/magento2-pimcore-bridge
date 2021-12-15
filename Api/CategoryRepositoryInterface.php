<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Api;

use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Interface CategoryRepositoryInterface
 */
interface CategoryRepositoryInterface extends \Magento\Catalog\Api\CategoryRepositoryInterface
{
    /**
     * @param int $pimId
     * @param int $storeId
     *
     * @throws NoSuchEntityException
     *
     * @return CategoryInterface
     */
    public function getByPimId(int $pimId, int $storeId = 0): CategoryInterface;
}
