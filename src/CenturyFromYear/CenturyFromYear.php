<?php

namespace PhpCodeWars\CenturyFromYear;

class CenturyFromYear
{
    /**
     * @param int $year
     * @return int
     */
    final public function centuryFromYear(int $year): int
    {
        return ceil($year / 100);
    }
}