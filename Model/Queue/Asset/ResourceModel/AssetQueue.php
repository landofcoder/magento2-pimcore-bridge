<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Model\Queue\Asset\ResourceModel;

use Lof\PimcoreIntegration\Api\Queue\Data\AssetQueueInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class AssetQueue
 */
class AssetQueue extends AbstractDb
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(AssetQueueInterface::SCHEMA_NAME, AssetQueueInterface::TRANSACTION_ID);
    }
}
