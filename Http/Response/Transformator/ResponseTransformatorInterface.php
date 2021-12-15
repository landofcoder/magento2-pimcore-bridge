<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Http\Response\Transformator;

use Magento\Framework\DataObject;
use Zend\Http\Response;

/**
 * Interface ResponseTransformatorInterface
 */
interface ResponseTransformatorInterface
{
    /**
     * @param Response $response
     *
     * @return DataObject
     */
    public function transform(Response $response): DataObject;
}
