<?php

namespace Hiberus\Bitrian\Model;

use Hiberus\Bitrian\Api\ExamenRepositoryInterface;
use Hiberus\Bitrian\Api\Data\ExamenInterface;
use Magento\Framework\Exception\CouldNotSaveException;

class ExamenRepository implements ExamenRepositoryInterface
{

    protected ResourceModel\Examen $resourceExamen;
    protected \Hiberus\Bitrian\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory;

    /**
     * @param ResourceModel\Examen $resourceExamen
     * @param \Hiberus\Bitrian\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory
     */
    public function __construct(
        \Hiberus\Bitrian\Model\ResourceModel\Examen     $resourceExamen,
        \Hiberus\Bitrian\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory
    ) {
        $this->resourceExamen = $resourceExamen;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
    }

    /**
     * @param ExamenInterface $examen
     * @return ExamenInterface
     * @throws CouldNotSaveException
     */
    public function save(
        ExamenInterface $examen
    ) {

        try {
            $this->resourceExamen->save($examen);
        } catch(\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }

        return $examen;

    }

    /**
     * @param $examId
     * @return mixed
     */
    public function getById($examId)
    {
        try {
            $examen = $this->examenInterfaceFactory->create();
            $examen->setEntityId($examId);
            $this->resourceExamen->load($examen, $examId);
        } catch (\Exception $e) {
            $examen = $this->examenInterfaceFactory->create();
        }

        return $examen;
    }

    /**
     * @param \Hiberus\Bitrian\Api\Data\ExamenInterface $examen
     * @return bool
     */
    public function delete(\Hiberus\Bitrian\Api\Data\ExamenInterface $examen)
    {
        try {
            $this->resourceExamen->delete($examen);
        } catch (\Exception $e) {

            return false;
        }

        return true;
    }

    /**
     * @param int $examId
     * @return bool
     */
    public function deleteById($examId)
    {
        return $this->delete($this->getById($examId));
    }

}
