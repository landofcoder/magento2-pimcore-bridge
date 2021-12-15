<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Test\Integration\Model\Product\Attribute;

use Lof\PimcoreIntegration\Api\AttributeSetRepositoryInterface;
use Magento\Eav\Model\Entity\Attribute\Set;
use Magento\TestFramework\ObjectManager;

/**
 * Class AttributeSetRepositoryTest
 */
class AttributeSetRepositoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var AttributeSetRepositoryInterface
     */
    private $attrSetRepository;

    /**
     * @var ObjectManager
     */
    private $om;

    public function setUp()
    {
        $this->om = ObjectManager::getInstance();
        $this->attrSetRepository = $this->om->create(AttributeSetRepositoryInterface::class);
    }

    /**
     * @magentoDataFixture ../../../../app/code/Lof/PimcoreIntegration/Test/Integration/_files/empty_attribute_set.php
     */
    public function testGetByChecksumMethod()
    {
        $result = $this->attrSetRepository->getByChecksum('#123');
        $this->assertInstanceOf(Set::class, $result);
    }

    /**
     * @expectedException \Magento\Framework\Exception\NoSuchEntityException
     */
    public function testGetByChecksumException()
    {
        $this->attrSetRepository->getByChecksum('unknown-checksum');
    }
}
