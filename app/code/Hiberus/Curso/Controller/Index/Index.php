<?php

namespace Hiberus\Curso\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;

class Index implements HttpGetActionInterface
{

    protected \Magento\Framework\View\Result\PageFactory $pageFactory;
    private \Hiberus\Curso\Model\CursoFactory $cursoFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Hiberus\Curso\Model\CursoFactory $cursoFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->cursoFactory = $cursoFactory;
    }

    public function execute()
    {
        $curso = $this->cursoFactory->create();
        $collection = $curso->getCollection();
        foreach ($collection as $item) {
            echo $item->getData();
        }

        return $this->pageFactory->create();
    }
}
