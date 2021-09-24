<?php

namespace Hiberus\Bitrian\Model;

use Hiberus\Bitrian\Api\NotasRepositoryInterface;
use Hiberus\Bitrian\Api\Data\NotasInterface;
use Magento\Framework\Exception\CouldNotSaveException;

class NotasRepository implements NotasRepositoryInterface
{

    protected ResourceModel\Notas $resourceNotas;
    protected NotasRepositoryInterface $notasRepository;

    /**
     * @param ResourceModel\Notas $resourceNotas
     * @param NotasRepositoryInterface $notasRepository
     */
    public function __construct(
        \Hiberus\Bitrian\Model\ResourceModel\Notas $resourceNotas,
        \Hiberus\Bitrian\Api\Data\NotasInterfaceFactory $notasInterfaceFactory
    ) {
        $this->resourceNotas = $resourceNotas;
        $this->notasInterfaceFactory = $notasInterfaceFactory;
    }

    /**
     * @param NotasInterface $notas
     * @return NotasInterface
     * @throws CouldNotSaveException
     */
    public function save(NotasInterface $notas) {

        try {
            $this->resourceNotas->save($notas);
        } catch(\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }

        return $notas;

    }

    /**
     * @param $examId
     * @return mixed
     */
    public function getById($examId)
    {
        try {
            $notas = $this->notasInterfaceFactory->create();
            $notas->setIdExam($examId);
            $this->resourceNotas->load($notas, $examId);
        } catch (\Exception $e) {
            $notas = $this->notasInterfaceFactory->create();
        }

        return $notas;
    }

    /**
     * @param NotasInterface $notas
     * @return bool
     */
    public function delete(NotasInterface $notas)
    {
        try {
            $this->resourceNotas->delete($notas);
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
