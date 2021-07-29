<?php

namespace TimeZoneApp\BaseTimeZone;

use DateTime;
use \DateTimeInterface;
use stdClass;
use TimeZoneApp\BaseTimeZone\IP;
use TimeZoneApp\Interfaces\IP as InterfaceIP;
use TimeZoneApp\Interfaces\IService;
use TimeZoneApp\Interfaces\ITimeZone;

/**
 * Class TimeZone
 * @package TimeZoneApp\BaseTimeZone
 */
class TimeZone implements ITimeZone
{

    /**
     * @var \TimeZoneApp\BaseTimeZone\IP
     */
    private $ipv4;
    /**
     * @var DateTime
     */
    public $dateTime;

    /**
     * TimeZone constructor.
     */
    public function __construct()
    {
        $this->dateTime = new DateTime();

        $this->ipv4 = new IP( $_SERVER['SERVER_ADDR'] );
    }

    /**
     * @param IService $iService
     * @return DateTimeInterface
     */
    public function getCurrentLocal(IService $iService): DateTimeInterface
    {
        $serviseProvider = $iService->getLocalByIPv4($this->ipv4);

        $this->dateTime = $serviseProvider;

        return $serviseProvider;
    }

    /**
     * @param InterfaceIP $ip
     */
    public function setIpv4(InterfaceIP $ip)
    {
        $this->ipv4 = $ip;
    }

}
