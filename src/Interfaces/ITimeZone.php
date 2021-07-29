<?php
namespace TimeZoneApp\Interfaces;

use DateTimeInterface;
use TimeZoneApp\Interfaces\IP;

/**
 * Interface ITimeZone
 * @package TimeZoneApp\Interfaces
 */
interface ITimeZone {

    /**
     * @param IService $iService
     * @return DateTimeInterface
     */
    public function getCurrentLocal(IService $iService): DateTimeInterface;

    /**
     * @param \TimeZoneApp\Interfaces\IP $ip
     * @return void
     */
    public function setIpv4(IP $ip);
}