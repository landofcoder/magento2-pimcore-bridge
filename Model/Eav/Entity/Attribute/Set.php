<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Model\Eav\Entity\Attribute;

use Lof\PimcoreIntegration\Api\Data\AttributeSetInterface;

/**
 * Class Set
 */
class Set extends \Magento\Eav\Model\Entity\Attribute\Set implements AttributeSetInterface
{
    /**
     * @return string
     */
    public function getChecksum(): string
    {
        return $this->getData(self::KEY_ATTRIBUTE_SET_CHECKSUM);
    }

    /**
     * @param string $checksum
     *
     * @return AttributeSetInterface
     */
    public function setChecksum(string $checksum): AttributeSetInterface
    {
        return $this->setData(self::KEY_ATTRIBUTE_SET_CHECKSUM, $checksum);
    }
}
