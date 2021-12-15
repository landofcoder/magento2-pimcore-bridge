<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Test\Integration\Listeners\AttributeSet;

use Lof\PimcoreIntegration\Listeners\AttributeSet\NameResolver;
use Magento\TestFramework\ObjectManager;

/**
 * Class NameResolverTest
 */
class NameResolverTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @var NameResolver
     */
    private $nameResolver;

    public function setUp()
    {
        $this->om = ObjectManager::getInstance();
        $this->nameResolver = $this->om->create(NameResolver::class);
    }

    /**
     * @magentoDataFixture ../../../../app/code/Lof/PimcoreIntegration/Test/Integration/_files/empty_attribute_set.php
     */
    public function testNameResolving()
    {
        $this->assertSame('pimcore-set-2', $this->nameResolver->getNextPimcoreAttributeSetName());
    }
}
