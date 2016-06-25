<?php
namespace alphayax\freebox\api\v3\services\config\SwitchPort;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Stats
 * @package alphayax\freebox\api\v3\services\config\SwitchPort
 */
class Stats extends ServiceAuth {

    const API_SWITCH_PORT_STATS = '/api/v3/switch/port/%u/stats';

    /**
     * Get a port configuration
     * @param int $portId
     * @return models\SwitchPort\Stats
     */
    public function getFromPortId( $portId){
        $service = sprintf( static::API_SWITCH_PORT_STATS, $portId);
        $rest = $this->getService( $service);
        $rest->GET();

        return $rest->getResult( models\SwitchPort\Stats::class);
    }

}
