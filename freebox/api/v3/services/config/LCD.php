<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\models\LCDConfig;
use alphayax\freebox\api\v3\Service;

/**
 * Class LCD
 * @package alphayax\freebox\api\v3\services\config
 */
class LCD extends Service {

    const API_LCD_CONFIG = '/api/v3/lcd/config/';

    /**
     * @return LCDConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_LCD_CONFIG);
        $rest->GET();

        return new LCDConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * @param LCDConfig $lcdConfig
     * @return LCDConfig
     */
    public function setConfiguration( LCDConfig $lcdConfig){
        $rest = $this->getAuthService( self::API_LCD_CONFIG);
        $rest->PUT( $lcdConfig->toArray());

        return new LCDConfig( $rest->getCurlResponse()['result']);
    }

}