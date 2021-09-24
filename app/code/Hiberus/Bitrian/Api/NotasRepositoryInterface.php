<?php

namespace Hiberus\Bitrian\Api;
use \Hiberus\Bitrian\Api\Data\NotasInterface;

interface NotasRepositoryInterface {

    /**
     * @param NotasInterface $notasInterface
     * @return NotasInterface
     */
    public function save(NotasInterface $notasInterface);

    /**
     * @param $idExam
     * @return NotasInterface
     */
    public function getById($idExam);

    /**
     * @param NotasInterface $notasInterface
     * @return bool
     */
    public function delete(NotasInterface $notasInterface);

    /**
     * @param $idExam
     * @return bool
     */
    public function deleteById($idExam);
}
