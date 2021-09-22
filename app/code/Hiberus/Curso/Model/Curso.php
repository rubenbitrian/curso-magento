<?php

namespace Hiberus\Curso\Model;

use Hiberus\Curso\Api\Data\CursoInterface;
use Magento\Framework\Model\AbstractModel;

class Curso extends AbstractModel implements CursoInterface
{

    protected function _construct() {
        $this->_init(\Hiberus\Curso\Model\ResourceModel\Examen::class);
    }

    /**
     * @inheritDoc
     */
    public function getEntityId() {
        return $this->getData('entity_id');
    }

    /**
     * @inheritDoc
     */
    public function setEntityId($entityId) {
        return $this->setData('entity_id', $entityId);
    }

    /**
     * @inheritDoc
     */
    public function getNombre()
    {
        return $this->getData('nombre');
    }

    /**
     * @inheritDoc
     */
    public function setNombre($nombre)
    {
        return $this->setData('nombre', $nombre);
    }

    /**
     * @inheritDoc
     */
    public function getApellido()
    {
        return $this->getData('apellido');
    }

    /**
     * @inheritDoc
     */
    public function setApellido($apellido)
    {
        return $this->setData('apellido', $apellido);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->getData('created_at');
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData('created_at', $createdAt);
    }
}
