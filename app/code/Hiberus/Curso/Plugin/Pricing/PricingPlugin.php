<?php

namespace Hiberus\Curso\Plugin\Pricing;

use Magento\Framework\Pricing\PriceCurrencyInterface;

class PricingPlugin
{
    public function afterFormatCurrency(
        $amount,
        $includeContainer = true,
        $precision = PriceCurrencyInterface::DEFAULT_PRECISION
    ) {
        return $this->priceCurrency->format($amount, $includeContainer, $precision) . " / por unidad.";
    }


}
