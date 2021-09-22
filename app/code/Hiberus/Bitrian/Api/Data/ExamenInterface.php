<?php

namespace Hiberus\Bitrian\Api\Data;

interface ExamenInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    public const TABLE_NAME = 'hiberus_exam';
    public const COLUMN_ID = 'id_exam';

    /**
     * @return int
     */
    public function getIdExam();

    /**
     * @param int $idExam
     * @return $this
     */
    public function setIdExam($idExam);

    /**
     * @return string
     */
    public function getFirstname();

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname);

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname);

    /**
     * @return double
     */
    public function getMark();

    /**
     * @param double $mark
     * @return $this
     */
    public function setMark($mark);

}
