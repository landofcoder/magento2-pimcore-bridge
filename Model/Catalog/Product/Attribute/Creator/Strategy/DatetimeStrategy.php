<?php
/**
 * @package  Lof\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Model\Catalog\Product\Attribute\Creator\Strategy;

use Magento\Catalog\Model\Product;
use Magento\Eav\Model\Entity\Attribute\Backend\Datetime;

/**
 * Class DatetimeStrategy
 */
class DatetimeStrategy extends AbstractStrategy
{
    /**
     * @return int
     */
    public function execute(): int
    {
        $eavSetup = $this->eavSetupFactory->create();
        $eavSetup->addAttribute(
            Product::ENTITY,
            $this->code,
            array_merge(self::$defaultAttrConfig, [
                'type'    => 'datetime',
                'label'   => $this->attrData['label'],
                'input'   => 'date',
                'backend' => Datetime::class,
            ])
        );

        return $eavSetup->getAttributeId(Product::ENTITY, $this->code);
    }
}
