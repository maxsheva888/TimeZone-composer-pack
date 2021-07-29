<?php

namespace TimeZoneApp\Interfaces;

use DateTimeInterface;
use TimeZoneApp\Interfaces\IP;

/**
 * Interface IService
 * @package TimeZoneApp\Interfaces
 */
interface IService
{
    /**
     * @param \TimeZoneApp\Interfaces\IP $ip
     * @return DateTimeInterface
     */
    public function getLocalByIPv4(IP $ip): DateTimeInterface;
}