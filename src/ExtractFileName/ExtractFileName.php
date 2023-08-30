<?php

namespace PhpCodeWars\ExtractFileName;

class ExtractFileName
{
    /**
     * @param string $dirtyFileName
     * @return string
     */
    public function fileNameExtractor(string $dirtyFileName): string
    {
        preg_match("/\d*_(.*)\./", $dirtyFileName, $result);

        return $result[1];
    }
}