<?php

namespace PhpCodeWars\ConvertBooleanValuesToStrings;

class ConvertBooleanValuesToStrings
{
    /**
     * @param bool $bool
     * @return string
     */
    final public function boolToWord(bool $bool): string
    {
        return $bool ? 'Yes' : 'No';
    }
}
