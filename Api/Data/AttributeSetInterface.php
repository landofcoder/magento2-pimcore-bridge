<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Api\Data;

/**
 * Interface AttributeSetInterface
 */
interface AttributeSetInterface extends \Magento\Eav\Api\Data\AttributeSetInterface
{
    /**
     * Attribute set checksum key
     */
    const KEY_ATTRIBUTE_SET_CHECKSUM = 'checksum';

    /**
     * @return string
     */
    public function getChecksum(): string;

    /**
     * @param string $checksum
     *
     * @return AttributeSetInterface
     */
    public function setChecksum(string $checksum): AttributeSetInterface;
}
