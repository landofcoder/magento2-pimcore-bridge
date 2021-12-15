<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Model\Pimcore\Mapper;

use Magento\Catalog\Model\Product\Visibility;

/**
 * Class VisibilityMapper
 */
class VisibilityMapper implements ComplexMapperInterface
{
    /**
     * @param array $attributeData
     *
     * @return int
     */
    public function map(array $attributeData): int
    {
        if (empty($attributeData['value']) || $value = $attributeData['value'] === false) {
            $value = Visibility::VISIBILITY_NOT_VISIBLE;
        } else {
            $value = Visibility::VISIBILITY_BOTH;
        }

        return $value;
    }
}
