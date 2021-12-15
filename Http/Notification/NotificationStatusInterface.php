<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Http\Notification;

/**
 * Interface NotificationStatusInterface
 */
interface NotificationStatusInterface
{
    /**
     * Status codes
     */
    const ERROR   = 'ERROR';

    const SUCCESS = 'SUCCESS';

    const DELETED = 'DELETED';
}
