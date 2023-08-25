<?php

namespace PhpCodeWars\SentenceSmash;

class SentenceSmash
{
    /**
     * @param array $words
     * @return string
     */
    public function smash(array $words): string
    {
        return implode(' ', $words);
    }
}