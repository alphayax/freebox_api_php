<?php
namespace alphayax\freebox\api\v3\services\config\WiFi;
use alphayax\freebox\api\v3\Service;

/**
 * Class Bss
 * @package alphayax\freebox\api\v3\services\config\WiFi
 */
class Bss extends Service {

    const API_WIFI_BSS = '/api/v3/wifi/bss/';

    /**
     * Get the list of Freebox Access Points
     * @return \alphayax\freebox\api\v3\models\WiFi\Bss\Bss[]
     */
    public function getAll() {
        $rest = $this->getAuthService( self::API_WIFI_BSS);
        $rest->GET();

        return $rest->getResultAsArray( \alphayax\freebox\api\v3\models\WiFi\Bss\Bss::class);
    }

    /**
     * Get the list of Freebox Access Points
     * @param $BssId
     * @return \alphayax\freebox\api\v3\models\WiFi\Bss\Bss
     */
    public function getFromId( $BssId) {
        $rest = $this->getAuthService( self::API_WIFI_BSS . $BssId);
        $rest->GET();

        return $rest->getResult( \alphayax\freebox\api\v3\models\WiFi\Bss\Bss::class);
    }

    /**
     * Get the list of Freebox Access Points
     * @param \alphayax\freebox\api\v3\models\WiFi\Bss\Bss $Bss
     * @return \alphayax\freebox\api\v3\models\WiFi\Bss\Bss
     */
    public function update( \alphayax\freebox\api\v3\models\WiFi\Bss\Bss $Bss) {
        $rest = $this->getAuthService( self::API_WIFI_BSS . $Bss->getId());
        $rest->PUT( $Bss);

        return $rest->getResult( \alphayax\freebox\api\v3\models\WiFi\Bss\Bss::class);
    }

}
