<?php

namespace Hiberus\Bitrian\Plugin\Marks;
use \Hiberus\Bitrian\Model\Notas;

class MarksPlugin{

    public function afterGetMark(Notas $subject, $result)
    {
        if ($subject->getData('mark') < 5.0) {
            $subject->setMark(4.9);
            $result = $subject->getData('mark');
        }
        return $result;
    }

}
