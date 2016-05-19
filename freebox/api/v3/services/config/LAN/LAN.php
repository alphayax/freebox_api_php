<?php
namespace alphayax\freebox\api\v3\services\config\LAN;
use alphayax\freebox\api\v3\models\LanConfig;
use alphayax\freebox\api\v3\Service;


/**
 * Class LAN
 * @package alphayax\freebox\api\v3\services\config
 */
class LAN extends Service {

    const API_LAN_CONFIG = '/api/v3/lan/config/';

    /**
     * @throws \Exception
     * @return LanConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_LAN_CONFIG);
        $rest->GET();

        return new LanConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * @param LanConfig $new_LanConfig
     * @return LanConfig
     * @throws \Exception
     */
    public function setConfiguration( LanConfig $new_LanConfig){
        $rest = $this->getAuthService( self::API_LAN_CONFIG);
        $rest->PUT( $new_LanConfig->toArray());

        return new LanConfig( $rest->getCurlResponse()['result']);
    }

}
