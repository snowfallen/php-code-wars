<?php

namespace PhpCodeWars\RemoveExclamationMarks;

class RemoveExclamationMarks
{
    /**
     * @param string $string
     * @return string
     */
    final public function removeExclamationMarks(string $string): string
    {
        return str_replace('!', '', $string);
    }
}
