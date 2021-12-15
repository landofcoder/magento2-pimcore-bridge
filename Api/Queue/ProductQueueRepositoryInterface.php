<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Mateusz Bukowski <mbukowski@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Api\Queue;

use Lof\PimcoreIntegration\Api\Queue\Data\ProductQueueInterface;
use Lof\PimcoreIntegration\Api\Queue\Data\QueueInterface;
use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;

/**
 * Interface ProductQueueRepositoryInterface
 */
interface ProductQueueRepositoryInterface
{
    /**
     * @param int $transactionId
     *
     * @return ProductQueueInterface
     */
    public function getById(int $transactionId): ProductQueueInterface;

    /**
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return SearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * @param ProductQueueInterface $productQueue
     *
     * @return QueueInterface
     */
    public function save(ProductQueueInterface $productQueue): QueueInterface;

    /**
     * @param ProductQueueInterface $productQueue
     *
     * @throws CouldNotDeleteException
     *
     * @return bool
     */
    public function delete(ProductQueueInterface $productQueue): bool;
}
