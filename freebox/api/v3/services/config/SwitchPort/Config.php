<?php
namespace alphayax\freebox\api\v3\services\config\SwitchPort;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Config
 * @package alphayax\freebox\api\v3\services\config\SwitchPort
 */
class Config extends ServiceAuth {

    const API_SWITCH_PORT_CONFIG = '/api/v3/switch/port/%u';

    /**
     * Get a port configuration
     * @param int $portId
     * @return \alphayax\freebox\api\v3\models\SwitchPort\Config
     */
    public function getFromPortId( $portId){
        $service = sprintf( static::API_SWITCH_PORT_CONFIG, $portId);
        $rest = $this->getService( $service);
        $rest->GET();

        return $rest->getResult( models\SwitchPort\Config::class);
    }

    /**
     * Update a port configuration
     * @param \alphayax\freebox\api\v3\models\SwitchPort\Config $config
     * @return \alphayax\freebox\api\v3\models\SwitchPort\Config
     */
    public function update( models\SwitchPort\Config $config){
        $service = sprintf( static::API_SWITCH_PORT_CONFIG, $config->getId());
        $rest = $this->getService( $service);
        $rest->PUT( $config);

        return $rest->getResult( models\SwitchPort\Config::class);
    }

}
