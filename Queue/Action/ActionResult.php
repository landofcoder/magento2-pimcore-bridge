<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Queue\Action;

/**
 * Class ActionResult
 */
class ActionResult implements ActionResultInterface
{
    /**
     * @var string
     */
    private $result;

    /**
     * ActionResult constructor.
     *
     * @param string $result
     */
    public function __construct(string $result)
    {
        $this->result = $result;
    }

    /**
     * @return string
     */
    public function getResult(): string
    {
        return $this->result;
    }
}
