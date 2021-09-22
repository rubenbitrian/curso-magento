<?php

namespace Hiberus\Bitrian\Api;

interface ExamenRepositoryInterface
{

    /**
     * @param \Hiberus\Bitrian\Api\Data\ExamenInterface $examenInterface
     * @return \Hiberus\Bitrian\Api\Data\ExamenInterface
     */
    public function save(\Hiberus\Bitrian\Api\Data\ExamenInterface $examenInterface);

    /**
     * @param $idExam
     * @return \Hiberus\Bitrian\Api\Data\ExamenInterface
     */
    public function getById($idExam);

    /**
     * @param \Hiberus\Bitrian\Api\Data\ExamenInterface $examenInterface
     * @return bool
     */
    public function delete(\Hiberus\Bitrian\Api\Data\ExamenInterface $examenInterface);

    /**
     * @param $idExam
     * @return bool
     */
    public function deleteById($idExam);

}
