<?php
namespace alphayax\freebox\api\v3\services\config\SwitchPort;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Status
 * @package alphayax\freebox\api\v3\services\config\SwitchPort
 */
class Status extends ServiceAuth {

    const API_SWITCH_STATUS = '/api/v3/switch/status/';

    /**
     * Get the current switch status
     * @return \alphayax\freebox\api\v3\models\SwitchPort\Status
     */
    public function getStatus() {
        $rest = $this->getService( self::API_SWITCH_STATUS);
        $rest->GET();

        return $rest->getResult( models\SwitchPort\Status::class);
    }

}
