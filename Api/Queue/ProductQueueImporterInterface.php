<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Mateusz Bukowski <mbukowski@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Api\Queue;

use Lof\PimcoreIntegration\Api\Queue\Data\ProductQueueInterface;

/**
 * Interface ProductQueueImporterInterface
 *
 * @api
 */
interface ProductQueueImporterInterface
{
    /**
     * Add published product in Pimcore to Magento import queue as a insert/update request
     *
     * @param ProductQueueInterface $data
     *
     * @return string[]
     */
    public function insertOrUpdate(ProductQueueInterface $data): array;

    /**
     * Add published product in Pimcore to Magento import queue as a delete request
     *
     * @param int $productId
     *
     * @return string[]
     */
    public function delete(int $productId): array;
}
