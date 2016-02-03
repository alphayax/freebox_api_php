<?php
namespace alphayax\freebox\api\v3\config;
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
     * @throws \Exception
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_SYSTEM);
        $rest->GET();

        return $rest->getCurlResponse();
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function reboot( ){
        $rest = $this->getAuthService( self::API_SYSTEM_REBOOT);
        $rest->POST( );

        return $rest->getCurlResponse();
    }

}
