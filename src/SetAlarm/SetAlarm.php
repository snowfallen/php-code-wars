<?php

namespace PhpCodeWars\SetAlarm;

class SetAlarm
{
    /**
     * @param bool $employed
     * @param bool $vacation
     * @return bool
     */
    final public function setAlarm(bool $employed, bool $vacation): bool
    {
        return $employed && !$vacation;
    }
}
