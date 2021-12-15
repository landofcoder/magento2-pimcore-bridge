<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

use Lof\PimcoreIntegration\Api\Queue\Data\CategoryQueueInterface;
use Lof\PimcoreIntegration\Queue\Importer\CategoryQueueImporter;

$om = \Magento\TestFramework\ObjectManager::getInstance();

/** @var CategoryQueueInterface $queue */
$queue = $om->create(CategoryQueueInterface::class);
$queue->setCategoryId('1')->setStoreViewId('0')->setAction(CategoryQueueImporter::ACTION_INSERT_UPDATE)->save();

$queue = $om->create(CategoryQueueInterface::class);
$queue->setCategoryId('2')->setStoreViewId('1')->setAction(CategoryQueueImporter::ACTION_INSERT_UPDATE)->save();

$queue = $om->create(CategoryQueueInterface::class);
$queue->setCategoryId('333')->setStoreViewId('0')->setAction(CategoryQueueImporter::ACTION_DELETE)->save();
