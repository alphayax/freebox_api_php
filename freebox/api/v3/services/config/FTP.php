<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\Service;


/**
 * Class FTP
 * @package alphayax\freebox\api\v3\config
 * @author <alphayax@gmail.com>
 */
class FTP extends Service {

    const API_FTP_CONFIG = '/api/v3/ftp/config/';

    /**
     * @throws \Exception
     */
    public function get_current_configuration(){
        $rest = $this->getAuthService( self::API_FTP_CONFIG);
        $rest->GET();

        return $rest->getCurlResponse();
    }

    /**
     * @param array $new_config_x
     * @return array
     * @throws \Exception
     */
    public function set_attribute_configuration( $new_config_x = []){
        $rest = $this->getAuthService( self::API_FTP_CONFIG);
        $rest->PUT( $new_config_x);

        return $rest->getCurlResponse();
    }

}
