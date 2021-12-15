<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Webapi\Response;

/**
 * Interface CodesInterface
 */
interface CodesInterface
{
    /**
     * HTTP Code for accepted status
     */
    const CODE_SUCCESS = 200;

    /**
     * HTTP Code for failure status
     */
    const CODE_FAILURE = 400;
}
