<?php
namespace alphayax\freebox\api\v3\services\config\Connection;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Xdsl
 * @package alphayax\freebox\api\v3\services\config\Connection
 */
class Xdsl extends ServiceAuth {

    const API_CONNECTION_XDSL = '/api/v3/connection/xdsl/';

    /**
     * Get the current XDSL Connection status
     * @return models\Connection\Status
     */
    public function getStatus(){
        $rest = $this->getService( self::API_CONNECTION_XDSL);
        $rest->GET();

        return $rest->getResult( models\Connection\Xdsl\XdslInfos::class);
    }

}
