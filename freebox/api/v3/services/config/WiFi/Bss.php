<?php
namespace alphayax\freebox\api\v3\services\config\WiFi;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Bss
 * @package alphayax\freebox\api\v3\services\config\WiFi
 */
class Bss extends ServiceAuth {

    const API_WIFI_BSS = '/api/v3/wifi/bss/';

    /**
     * Get the list of Freebox BSS
     * @return models\WiFi\Bss\Bss[]
     */
    public function getAll() {
        $rest = $this->getService( self::API_WIFI_BSS);
        $rest->GET();

        return $rest->getResultAsArray( models\WiFi\Bss\Bss::class);
    }

    /**
     * Get a specific BSS
     * @param $BssId
     * @return models\WiFi\Bss\Bss
     */
    public function getFromId( $BssId) {
        $rest = $this->getService( self::API_WIFI_BSS . $BssId);
        $rest->GET();

        return $rest->getResult( models\WiFi\Bss\Bss::class);
    }

    /**
     * Update a BSS
     * @param models\WiFi\Bss\Bss $Bss
     * @return models\WiFi\Bss\Bss
     */
    public function update( models\WiFi\Bss\Bss $Bss) {
        $rest = $this->getService( self::API_WIFI_BSS . $Bss->getId());
        $rest->PUT( $Bss);

        return $rest->getResult( models\WiFi\Bss\Bss::class);
    }

}
