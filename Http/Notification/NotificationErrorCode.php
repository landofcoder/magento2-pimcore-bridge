<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Http\Notification;

/**
 * Interface NotificationTypeInterface
 */
interface NotificationErrorCode
{
    /**
     * Notification error codes
     */
    const UNKNOWN           = 100;

    const INVALID_PARENT_ID = 101;
}
