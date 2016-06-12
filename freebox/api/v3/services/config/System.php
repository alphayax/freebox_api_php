<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;


/**
 * Class System
 * @package alphayax\freebox\api\v3\config
 * @author <alphayax@gmail.com>
 */
class System extends Service {

    const API_SYSTEM        = '/api/v3/system/';
    const API_SYSTEM_REBOOT = '/api/v3/system/reboot/';

    /**
     * Get the current system info
     * @return models\SystemConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_SYSTEM);
        $rest->GET();

        return $rest->getResult( models\SystemConfig::class);
    }

    /**
     * Reboot the Freebox
     * @return bool
     */
    public function reboot(){
        $rest = $this->getAuthService( self::API_SYSTEM_REBOOT);
        $rest->POST();

        return $rest->getSuccess();
    }

}
