<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Test\Integration\Queue\Action;

use Lof\PimcoreIntegration\Api\CategoryRepositoryInterface;
use Lof\PimcoreIntegration\Api\Queue\Data\CategoryQueueInterface;
use Lof\PimcoreIntegration\Queue\Action\DeleteCategoryAction;
use Magento\Framework\Registry;
use Magento\TestFramework\ObjectManager;

/**
 * DeleteCategoryActionTest
 */
class DeleteCategoryActionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var DeleteCategoryAction
     */
    private $deleteCategoryAction;

    /**
     * @var ObjectManager
     */
    private $objectManager;

    public function setUp()
    {
        $this->objectManager = ObjectManager::getInstance();
        $this->deleteCategoryAction = $this->objectManager->create(DeleteCategoryAction::class);
    }

    /**
     * @magentoDataFixture ../../../../app/code/Lof/PimcoreIntegration/Test/Integration/_files/category.php
     * @expectedException \Magento\Framework\Exception\NoSuchEntityException
     */
    public function testDeletingCategory()
    {
        /** @var CategoryQueueInterface $queue */
        $queue = $this->objectManager->create(CategoryQueueInterface::class);
        $queue->setCategoryId(103);
        $registry = $this->objectManager->get(Registry::class);
        $registry->register('isSecureArea', true);
        $this->deleteCategoryAction->execute($queue);
        /** @var CategoryRepositoryInterface $catRepo */
        $catRepo = $this->objectManager->create(CategoryRepositoryInterface::class);
        $catRepo->getByPimId($queue->getCategoryId());
    }
}
