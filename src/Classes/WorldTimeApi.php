<?php
namespace TimeZoneApp\BaseTimeZone;

use DateTime;
use DateTimeInterface;
use Exception;
use TimeZoneApp\Interfaces\IP;
use TimeZoneApp\Interfaces\IService;


/**
 * Class WorldTimeApi
 * @package TimeZoneApp\BaseTimeZone
 */
class WorldTimeApi implements IService
{
    /**
     * Main HTTP/S address
     */
    private const API_URL = 'http://worldtimeapi.org/api/';

    /**
     * @param IP $ip
     * @return DateTimeInterface
     */
    public function getLocalByIPv4(IP $ip): DateTimeInterface
    {
        $current_action = 'ip/';

        try {
            
            $CURL = curl_init(self::API_URL . $current_action . $ip->ipv4 . '.json');
            
            curl_setopt($CURL, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($CURL, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($CURL, CURLOPT_TIMEOUT, 5);
            $data = curl_exec($CURL);
            $httpcode = curl_getinfo($CURL, CURLINFO_RESPONSE_CODE);
            
            $data = json_decode( $data );
            
            return new DateTime( $data->datetime );
            
        } catch (Exception $ex) {
            // TODO
        }

    }
}