<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Test\Unit\Queue\Action;

use Lof\PimcoreIntegration\Queue\Action\ActionFactory;
use Lof\PimcoreIntegration\Queue\Action\DeleteCategoryAction;
use Lof\PimcoreIntegration\Queue\Action\UpdateCategoryAction;
use Lof\PimcoreIntegration\Queue\ActionInterface;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit\Framework\TestCase;

class ActionFactoryTest extends TestCase
{
    /**
     * @var \Magento\Framework\App\ObjectManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $mockObjectManager;

    /**
     * @var ActionFactory
     */
    private $actionFactory;

    /**
     * @var ObjectManager
     */
    private $objectManager;

    public function setUp()
    {
        $this->objectManager = new ObjectManager($this);
        $this->mockObjectManager = $this->getMockBuilder(\Magento\Framework\App\ObjectManager::class)
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMock();

        $this->actionFactory = $this->objectManager->getObject(ActionFactory::class, [
            'objectManager' => $this->mockObjectManager,
        ]);
    }

    /**
     * @expectedException \Lof\PimcoreIntegration\Exception\InvalidTypeException
     */
    public function testCreateByTypeInvalidException()
    {
        $this->actionFactory->createByType('invalid-type');
    }

    /**
     * @return array
     */
    public function typeDataProvider()
    {
        return [
            [ActionInterface::UPDATE_CATEGORY_ACTION, UpdateCategoryAction::class],
            [ActionInterface::DELETE_CATEGORY_ACTION, DeleteCategoryAction::class],
        ];
    }

    /**
     * @param $type
     * @param $action
     *
     * @throws \Lof\PimcoreIntegration\Exception\InvalidTypeException
     * @dataProvider typeDataProvider
     */
    public function testCreateByType($type, $action)
    {
        $this->mockObjectManager->expects($this->once())
            ->method('create')
            ->with($action)
            ->willReturn($this->getMockBuilder($action)
                ->disableOriginalConstructor()
                ->setMethods([])
                ->getMock());

        $this->assertTrue($this->actionFactory->createByType($type) instanceof $action);
    }
}
