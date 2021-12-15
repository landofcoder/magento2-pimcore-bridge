<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Queue\Action\Asset\Strategy;

use Lof\PimcoreIntegration\Api\Queue\Data\AssetQueueInterface;
use Lof\PimcoreIntegration\Http\Response\Transformator\Data\AssetInterface;
use Lof\PimcoreIntegration\Queue\Action\ActionResultInterface;
use Lof\PimcoreIntegration\Queue\Action\Asset\TypeMetadataExtractorInterface;
use Magento\Framework\DataObject;

/**
 * Interface AssetHandlerStrategyInterface
 */
interface AssetHandlerStrategyInterface
{
    /**
     * @param DataObject|AssetInterface $dto
     * @param TypeMetadataExtractorInterface $metadataExtractor
     * @param AssetQueueInterface|null $queue
     *
     * @return ActionResultInterface
     */
    public function execute(
        DataObject $dto,
        TypeMetadataExtractorInterface $metadataExtractor,
        AssetQueueInterface $queue = null
    ): ActionResultInterface;
}
