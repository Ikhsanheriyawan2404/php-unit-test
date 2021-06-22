<?php

namespace ProgrammerZamanNow\Test;

class Math {

    static public function sum(array $values)
    {
        $total = 0;
        foreach($values as $value) {
            $total += $value;
        }
        return $total;
    }

}

?>