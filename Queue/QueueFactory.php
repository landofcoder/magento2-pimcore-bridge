<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Queue;

use Lof\PimcoreIntegration\Api\Queue\Data\AssetQueueInterface;
use Lof\PimcoreIntegration\Api\Queue\Data\CategoryQueueInterface;
use Lof\PimcoreIntegration\Api\Queue\Data\ProductQueueInterface;
use Lof\PimcoreIntegration\Exception\InvalidQueueTypeException;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\ObjectManagerInterface;

/**
 * Class QueueFactory
 */
class QueueFactory
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * QueueFactory constructor.
     *
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * @param string $type
     *
     * @throws InvalidQueueTypeException
     *
     * @return AbstractModel
     */
    public function create(string $type)
    {
        switch ($type) {
            case ProductQueueInterface::class:
            case CategoryQueueInterface::class:
            case AssetQueueInterface::class:
                return $this->objectManager->create($type);
            default:
                throw new InvalidQueueTypeException(__('Invalid queue type "%1"', $type));
        }
    }
}
