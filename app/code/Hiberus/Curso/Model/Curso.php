<?php

namespace Hiberus\Curso\Model;

use Hiberus\Curso\Api\Data\CursoInterface;
use Magento\Framework\Model\AbstractModel;

class Curso extends AbstractModel implements \Hiberus\Curso\Api\Data\CursoInterface
{

    protected function _construct()
    {
        $this->_init(\Hiberus\Curso\Model\ResourceModel\Curso::class);
    }

    /**
     * @inerhitDoc
     */
    public function getEntityId()
    {
        return $this->getData('entity_id');
    }

    /**
     * @inerhitDoc
     */
    public function setEntityId($entityId)
    {
        $this->setData('entity_id', $entityId);
    }

    /**
     * @inerhitDoc
     */
    public function getNombre()
    {
        return $this->getData('nombre');
    }

    /**
     * @inerhitDoc
     */
    public function setNombre($nombre)
    {
        $this->setData('nombre', $nombre);
    }

    /**
     * @inerhitDoc
     */
    public function getApellido()
    {
        return $this->getData('apellido');
    }

    /**
     * @inerhitDoc
     */
    public function setApellido($apellido)
    {
        return $this->setData('apellido', $apellido);
    }

    /**
     * @inerhitDoc
     */
    public function getCreatedAt()
    {
        return $this->getData('created_at');
    }

    /**
     * @inerhitDoc
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData('created_at', $createdAt);
    }
}
