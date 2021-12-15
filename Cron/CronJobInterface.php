<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Cron;

/**
 * Interface CronJobInterface
 */
interface CronJobInterface
{
    /**
     * @return void
     */
    public function execute();
}
