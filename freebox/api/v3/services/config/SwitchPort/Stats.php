<?php
namespace alphayax\freebox\api\v3\services\config\SwitchPort;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Stats
 * @package alphayax\freebox\api\v3\services\config\SwitchPort
 */
class Stats extends Service {

    const API_SWITCH_PORT_STATS = '/api/v3/switch/port/%u/stats';

    /**
     * Get a port configuration
     * @param int $portId
     * @return models\SwitchPort\Stats
     */
    public function getFromPortId( $portId){
        $service = sprintf( static::API_SWITCH_PORT_STATS, $portId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResult( models\SwitchPort\Stats::class);
    }

}
