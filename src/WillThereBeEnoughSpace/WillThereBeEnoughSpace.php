<?php

namespace PhpCodeWars\WillThereBeEnoughSpace;

class WillThereBeEnoughSpace
{
    /**
     * @param int $passengersLimit
     * @param int $actuallyOnBus
     * @param int $waitingForBus
     * @return int
     */
    final public function enoughSpaces(int $passengersLimit, int $actuallyOnBus, int $waitingForBus): int
    {
        return max(0, $actuallyOnBus + $waitingForBus - $passengersLimit);
    }
}
