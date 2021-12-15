<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Http;

/**
 * Interface UrlBuilderInterface
 */
interface UrlBuilderInterface
{
    /**
     * Builds endpoint url based on configuration
     *
     * @param string $path
     *
     * @return string
     */
    public function build(string $path): string;
}
