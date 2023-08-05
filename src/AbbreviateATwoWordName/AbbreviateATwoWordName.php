<?php

namespace PhpCodeWars\AbbreviateATwoWordName;

class AbbreviateATwoWordName
{
    /**
     * @param string $name
     * @return string
     */
    final public function abbreviateName(string $name): string
    {
        $words = explode(' ', $name);

        return strtoupper($words[0][0] . $words[1][0]);
    }
}
