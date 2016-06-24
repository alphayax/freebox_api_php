<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\Service;

/**
 * Class LCD
 * @package alphayax\freebox\api\v3\services\config
 */
class LCD extends Service {

    const API_LCD_CONFIG = '/api/v3/lcd/config/';

    /**
     * Get the current LCD configuration
     * @return models\LCDConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_LCD_CONFIG);
        $rest->GET();

        return $rest->getResult( models\LCDConfig::class);
    }

    /**
     * Update the LCD configuration
     * @param models\LCDConfig $lcdConfig
     * @return models\LCDConfig
     */
    public function setConfiguration( models\LCDConfig $lcdConfig){
        $rest = $this->getAuthService( self::API_LCD_CONFIG);
        $rest->PUT( $lcdConfig);

        return $rest->getResult( models\LCDConfig::class);
    }

}
