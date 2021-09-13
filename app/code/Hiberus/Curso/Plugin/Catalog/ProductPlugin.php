<?php

namespace Hiberus\Curso\Plugin\Catalog;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class ProductPlugin
{
    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ){
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @param $result
     * @return string
     */
    public function afterGetName(
        \Magento\Catalog\Model\Product $subject,
                                       $result
    ){

        $nombreGeneral = $this->scopeConfig->getValue(
            'hiberus_nombre/general/nombre_general', ScopeInterface::SCOPE_STORE); // Section id/group id/field id, valor de la configuracion por tienda
        $result = $result.' '.$nombreGeneral;
        return $result;
    }

}
