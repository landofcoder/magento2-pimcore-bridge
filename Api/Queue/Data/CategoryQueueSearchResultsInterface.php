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
 * Interface CategoryQueueSearchResultsInterface
 */
interface CategoryQueueSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get category queue list
     *
     * @return CategoryQueueInterface[]
     */
    public function getItems(): array;

    /**
     * Set category queue list
     *
     * @param CategoryQueueInterface[] $items
     *
     * @return $this
     */
    public function setItems(array $items): CategoryQueueSearchResultsInterface;
}
