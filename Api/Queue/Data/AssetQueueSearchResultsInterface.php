<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Api\Queue\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface AssetQueueSearchResultsInterface
 */
interface AssetQueueSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get category queue list
     *
     * @return AssetQueueInterface[]
     */
    public function getItems(): array;

    /**
     * Set category queue list
     *
     * @param AssetQueueInterface[] $items
     *
     * @return $this
     */
    public function setItems(array $items): AssetQueueSearchResultsInterface;
}
