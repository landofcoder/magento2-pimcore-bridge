<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Queue\Action\Asset;

/**
 * Interface TypeMetadataBuilderInterface
 */
interface TypeMetadataBuilderInterface
{
    /**
     * @return string
     */
    public function getTypeMetadataString(): string;
}
