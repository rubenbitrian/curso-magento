<?php

namespace Hiberus\Bitrian\Controller\Index;

use Hiberus\Bitrian\Api\ExamenRepositoryInterface;
use Hiberus\Bitrian\Api\Data\ExamenInterfaceFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Hiberus\Bitrian\Model\ResourceModel\Examen;

class Index implements HttpGetActionInterface
{

    protected \Magento\Framework\View\Result\PageFactory $pageFactory;
    protected ExamenRepositoryInterface $examenRepository;
    protected ExamenInterfaceFactory $examenInterfaceFactory;
    protected Examen $examenResource;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        ExamenRepositoryInterface $examenRepository,
        ExamenInterfaceFactory $examenInterfaceFactory,
        Examen $examenResource

    ) {
        $this->pageFactory = $pageFactory;
        $this->examenRepository = $examenRepository;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
        $this->examenResource = $examenResource;
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }

    /**
     * @throws \Exception
     */
    public function insertAlumno($nombre, $apellido) {

        $alumno = $this->examenInterfaceFactory->create();
        $alumno->setNombre($nombre);
        $alumno->setApellido($apellido);

        $this->examenResource->save($alumno);
        return $alumno->getEntityId();

    }
}
