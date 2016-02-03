<?php
namespace alphayax\freebox\api\v3\config;
use alphayax\freebox\api\v3\Service;


/**
 * Class DHCP
 * @package alphayax\freebox\api\v3
 * @author <alphayax@gmail.com>
 */
class DHCP extends Service {

    const API_DHCP_CONFIG = '/api/v3/dhcp/config/';

    /**
     * @throws \Exception
     */
    public function get_current_configuration(){
        $rest = $this->getAuthService( self::API_DHCP_CONFIG);
        $rest->GET();

        return $rest->getCurlResponse();
    }

    /**
     * @param array $new_config_x
     * @return array
     * @throws \Exception
     */
    public function set_attribute_configuration( $new_config_x = []){
        $rest = $this->getAuthService( self::API_DHCP_CONFIG);
        $rest->PUT( $new_config_x);

        return $rest->getCurlResponse();
    }

}
