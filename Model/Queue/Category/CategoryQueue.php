<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Mateusz Bukowski <mbukowski@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Model\Queue\Category;

use Lof\PimcoreIntegration\Api\Queue\Data\CategoryQueueInterface;
use Lof\PimcoreIntegration\Model\AbstractQueue;
use Lof\PimcoreIntegration\Model\Queue\Category\ResourceModel\CategoryQueue as CategoryQueueResource;

/**
 * Class CategoryQueue
 */
class CategoryQueue extends AbstractQueue implements CategoryQueueInterface
{
    /**
     * Queue type value
     */
    const TYPE = 'category';

    /**
     * @return int|null
     */
    public function getPimcoreId()
    {
        return $this->getCategoryId();
    }

    /**
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->getData(CategoryQueueInterface::CATEGORY_ID);
    }

    /**
     * @param string $categoryId
     *
     * @return $this
     */
    public function setCategoryId(string $categoryId)
    {
        return $this->setData(CategoryQueueInterface::CATEGORY_ID, $categoryId);
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
        $this->_init(CategoryQueueResource::class);
    }
}
