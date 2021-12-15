<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Model\Queue\Asset\ResourceModel\AssetQueue;

use Lof\PimcoreIntegration\Model\Queue\Asset\AssetQueue;
use Lof\PimcoreIntegration\Model\Queue\Asset\ResourceModel\AssetQueue as AssetQueueResource;
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
        $this->_init(AssetQueue::class, AssetQueueResource::class);
    }
}
