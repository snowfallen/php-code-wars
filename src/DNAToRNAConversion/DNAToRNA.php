<?php

namespace PhpCodeWars\DNAToRNAConversion;

class DNAToRNA
{
    /**
     * @param string $dna
     * @return string
     */
    final public function DNAToRna(string $dna): string
    {
        return str_replace('T', 'U', $dna);
    }
}