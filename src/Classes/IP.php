<?php
namespace TimeZoneApp\BaseTimeZone;

use TimeZoneApp\Interfaces\IP as InterfacesIP;

/**
 * Class IP
 * @package TimeZoneApp\BaseTimeZone
 */
class IP implements InterfacesIP
{
    /**
     * @var string
     */
    public string $ipv4;

    /**
     * IP constructor.
     * @param string $ip
     */
    public function __construct(string $ip)
    {
        $this->setIpv4($ip);
    }

    /**
     * @param string $ip
     */
    public function setIpv4(string $ip)
    {
        $this->ipv4 = $ip;
    }
}
