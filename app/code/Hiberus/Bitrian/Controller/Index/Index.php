<?php

namespace Hiberus\Bitrian\Controller\Index;

use Hiberus\Bitrian\Api\NotasRepositoryInterface;
use Hiberus\Bitrian\Api\Data\NotasInterfaceFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Hiberus\Bitrian\Model\ResourceModel\Notas;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{

    protected \Magento\Framework\View\Result\PageFactory $pageFactory;
    protected NotasRepositoryInterface $notasRepository;
    protected NotasInterfaceFactory $notasInterfaceFactory;
    protected Notas $notasResource;

    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param NotasRepositoryInterface $notasRepository
     * @param NotasInterfaceFactory $notasInterfaceFactory
     * @param Notas $notasResource
     */
    public function __construct(Context                  $context,
                                PageFactory              $pageFactory,
                                NotasRepositoryInterface $notasRepository,
                                NotasInterfaceFactory    $notasInterfaceFactory,
                                Notas                    $notasResource) {
        $this->pageFactory = $pageFactory;
        $this->notasRepository = $notasRepository;
        $this->notasInterfaceFactory = $notasInterfaceFactory;
        $this->notasResource = $notasResource;
    }

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->pageFactory->create();
    }
}
