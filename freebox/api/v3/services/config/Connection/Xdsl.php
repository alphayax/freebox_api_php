<?php
namespace alphayax\freebox\api\v3\services\config\Connection;
use alphayax\freebox\utils\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Xdsl
 * @package alphayax\freebox\api\v3\services\config\Connection
 */
class Xdsl extends Service {

    const API_CONNECTION_XDSL = '/api/v3/connection/xdsl/';

    /**
     * Get the current XDSL Connection status
     * @return models\Connection\Status
     */
    public function getStatus(){
        $rest = $this->getAuthService( self::API_CONNECTION_XDSL);
        $rest->GET();

        return $rest->getResult( models\Connection\Xdsl\XdslInfos::class);
    }

}
