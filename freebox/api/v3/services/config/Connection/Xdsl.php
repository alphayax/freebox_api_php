<?php
namespace alphayax\freebox\api\v3\services\config\Connection;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Xdsl
 * @package alphayax\freebox\api\v3\services\config\Connection
 */
class Xdsl extends Service {

    const API_CONNECTION_XDSL = '/api/v3/connection/xdsl/';

    /**
     * Get the current Connection status
     * @return models\Connection\Status
     */
    public function getStatus(){
        $rest = $this->getAuthService( self::API_CONNECTION_XDSL);
        $rest->GET();

        return new models\Connection\Xdsl\XdslInfos( $rest->getCurlResponse()['result']);
    }

}
