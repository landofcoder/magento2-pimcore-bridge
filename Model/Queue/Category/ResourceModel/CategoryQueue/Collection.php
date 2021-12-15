<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Mateusz Bukowski <mbukowski@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Model\Queue\Category\ResourceModel\CategoryQueue;

use Lof\PimcoreIntegration\Model\Queue\Category\CategoryQueue;
use Lof\PimcoreIntegration\Model\Queue\Category\ResourceModel\CategoryQueue as CategoryQueueResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 */
class Collection extends AbstractCollection
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(CategoryQueue::class, CategoryQueueResource::class);
    }
}
