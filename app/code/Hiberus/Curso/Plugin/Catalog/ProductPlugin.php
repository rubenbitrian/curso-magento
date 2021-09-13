<?php

namespace Hiberus\Curso\Plugin\Catalog;

use Magento\Framework\Pricing\PriceCurrencyInterface;

class ProductPlugin
{
    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @param $result
     * @return string
     */
    public function afterGetName(
        \Magento\Catalog\Model\Product $subject,
        $result
    )
    {
        $result = "Prueba de plugin";
        return $result;
    }

}
