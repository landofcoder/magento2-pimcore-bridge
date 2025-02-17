<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Mateusz Bukowski <mbukowski@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Api\Queue;

use Lof\PimcoreIntegration\Api\Queue\Data\CategoryQueueInterface;

/**
 * Interface CategoryQueueImporterInterface
 *
 * @api
 */
interface CategoryQueueImporterInterface
{
    /**
     * Add published category in Pimcore to Magento import queue as a insert/update request
     *
     * @param CategoryQueueInterface $data
     *
     * @return string[]
     */
    public function insertOrUpdate(CategoryQueueInterface $data): array;

    /**
     * Add published category in Pimcore to Magento import queue as a delete request
     *
     * @param int $categoryId
     *
     * @return string[]
     */
    public function delete(int $categoryId): array;
}
