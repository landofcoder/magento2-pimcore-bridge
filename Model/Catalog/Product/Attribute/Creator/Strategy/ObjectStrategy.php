<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Model\Catalog\Product\Attribute\Creator\Strategy;

/**
 * Class ObjectStrategy
 */
class ObjectStrategy extends AbstractObjectTypeStrategy
{
    /**
     * @return string
     */
    protected function getEventName(): string
    {
        return 'pimcore_attribute_creation_type_object';
    }
}
