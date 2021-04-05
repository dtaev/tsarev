<?php

namespace tsarev;

class LinearEquation
{
    public function LinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new TsarevException("Equation doesn`t exist. \n\r");
        }

        MyLog::log("It's linear equation. \n\r");
        return $this->x = [$b * (-1) / $a];
    }

    protected $x;
}