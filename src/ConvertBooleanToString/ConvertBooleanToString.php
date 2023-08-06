<?php

namespace PhpCodeWars\ConvertBooleanToString;

class ConvertBooleanToString
{
    /**
     * @param bool $boolean
     * @return string
     */
    final public function convertBooleanToString(bool $boolean): string
    {
        return var_export($boolean, true);
    }
}
