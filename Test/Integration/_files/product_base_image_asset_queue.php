<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

use Lof\PimcoreIntegration\Api\Queue\Data\AssetQueueInterface;
use Lof\PimcoreIntegration\Queue\Importer\AssetQueueImporter;

require __DIR__ . '/product_simple.php';

$om = \Magento\TestFramework\ObjectManager::getInstance();

/** @var AssetQueueInterface $queue */
$queue = $om->create(AssetQueueInterface::class);
$queue->setAssetId('103')
    ->setType('catalog_product/base_image')
    ->setTargetEntityId(1)
    ->setStoreViewId('0')
    ->setAction(AssetQueueImporter::ACTION_INSERT_UPDATE)
    ->save();
