<?php

namespace Hiberus\Bitrian\Plugin\Catalog;

use Magento\Catalog\Block\Product\View\Description;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class DescriptPlugin
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
     * @param Description $subject
     * @param $result
     * @return string
     */
    public function afterGetProduct(
        Description $subject,
                                       $result
    ){
        $subject->getProduct()->

        $descriptGeneral = $this->scopeConfig->getValue(
            'hiberus_descripcion/descripcion/descripcion_general', ScopeInterface::SCOPE_STORE); // Section id/group id/field id, valor de la configuracion por tienda
        $numberGeneral = $this->scopeConfig->getValue(
            'hiberus_descripcion/descripcion_numero/numero_general', ScopeInterface::SCOPE_STORE); // Section id/group id/field id, valor de la configuracion por tienda
        $result = $result . ' ' . $descriptGeneral . ' ' . $numberGeneral;
        return $result;
    }

}
