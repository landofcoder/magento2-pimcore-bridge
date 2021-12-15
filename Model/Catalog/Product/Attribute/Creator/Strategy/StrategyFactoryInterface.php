<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Model\Catalog\Product\Attribute\Creator\Strategy;

/**
 * Interface StrategyFactoryInterface
 */
interface StrategyFactoryInterface
{
    /**
     * @param string $code
     * @param array $attrData
     *
     * @return AttributeCreationStrategyInterface
     */
    public function create(string $code, array $attrData): AttributeCreationStrategyInterface;
}
