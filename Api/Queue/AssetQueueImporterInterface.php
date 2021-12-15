<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Api\Queue;

use Lof\PimcoreIntegration\Api\Queue\Data\AssetQueueInterface;

/**
 * Interface AssetQueueImporterInterface
 *
 * @api
 */
interface AssetQueueImporterInterface
{
    /**
     * Add published asset in Pimcore to Magento import queue as a insert/update request
     *
     * @param AssetQueueInterface $data
     *
     * @return string[]
     */
    public function insertOrUpdate(AssetQueueInterface $data): array;

    /**
     * Add published asset in Pimcore to Magento import queue as a delete request
     *
     * @param int $assetId
     *
     * @return string[]
     */
    public function delete(int $assetId): array;
}
