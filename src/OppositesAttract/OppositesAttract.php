<?php

namespace PhpCodeWars\OppositesAttract;

class OppositesAttract
{
    /**
     * @param int $flower1
     * @param int $flower2
     * @return bool
     */
    final public function inLove(int $flower1, int $flower2): bool
    {
        return ($flower1 % 2) ^ ($flower2 % 2);
    }
}
