<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Mateusz Bukowski <mbukowski@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Api\Queue;

use Lof\PimcoreIntegration\Api\Queue\Data\CategoryQueueInterface;

use Lof\PimcoreIntegration\Api\Queue\Data\QueueInterface;
use Magento\Framework\Api\Search\SearchResult;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface CategoryQueueRepositoryInterface
 */
interface CategoryQueueRepositoryInterface
{
    /**
     * @param int $transactionId
     *
     * @return CategoryQueueInterface
     */
    public function getById(int $transactionId): CategoryQueueInterface;

    /**
     * @param CategoryQueueInterface $categoryQueue
     *
     * @return QueueInterface
     */
    public function save(CategoryQueueInterface $categoryQueue): QueueInterface;

    /**
     * @param SearchCriteriaInterface $criteria
     *
     * @return SearchResult
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * @param CategoryQueueInterface $categoryQueue
     *
     * @return bool
     */
    public function delete(CategoryQueueInterface $categoryQueue): bool;
}
