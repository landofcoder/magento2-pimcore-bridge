<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Queue;

/**
 * Interface QueueStatusInterface
 */
interface QueueStatusInterface
{
    /**
     * Queue statuses
     */
    const COMPLETED = 200;
    const PENDING   = 1;
    const ERROR     = 500;
}
