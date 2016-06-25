<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class LCD
 * @package alphayax\freebox\api\v3\services\config
 */
class LCD extends ServiceAuth {

    const API_LCD_CONFIG = '/api/v3/lcd/config/';

    /**
     * Get the current LCD configuration
     * @return models\LCDConfig
     */
    public function getConfiguration(){
        $rest = $this->getService( self::API_LCD_CONFIG);
        $rest->GET();

        return $rest->getResult( models\LCDConfig::class);
    }

    /**
     * Update the LCD configuration
     * @param models\LCDConfig $lcdConfig
     * @return models\LCDConfig
     */
    public function setConfiguration( models\LCDConfig $lcdConfig){
        $rest = $this->getService( self::API_LCD_CONFIG);
        $rest->PUT( $lcdConfig);

        return $rest->getResult( models\LCDConfig::class);
    }

}
