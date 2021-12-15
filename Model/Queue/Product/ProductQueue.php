<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Mateusz Bukowski <mbukowski@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Model\Queue\Product;

use Lof\PimcoreIntegration\Api\Queue\Data\ProductQueueInterface;
use Lof\PimcoreIntegration\Model\AbstractQueue;
use Lof\PimcoreIntegration\Model\Queue\Product\ResourceModel\ProductQueue as ResourceProductQueue;

/**
 * Class ProductQueue
 */
class ProductQueue extends AbstractQueue implements ProductQueueInterface
{
    /**
     * Queue type value
     */
    const TYPE = 'product';

    /**
     * @param int $productId
     *
     * @return void
     */
    public function setProductId(int $productId)
    {
        $this->setData(static::PRODUCT_ID, $productId);
    }

    /**
     * @return int|null
     */
    public function getPimcoreId()
    {
        return $this->getProductId();
    }

    /**
     * @return int|null
     */
    public function getProductId()
    {
        return $this->getData(static::PRODUCT_ID);
    }

    /**
     * @return string
     */
    public function getQueueType(): string
    {
        return self::TYPE;
    }

    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init(ResourceProductQueue::class);
    }
}
