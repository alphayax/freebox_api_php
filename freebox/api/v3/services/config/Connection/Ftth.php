<?php
namespace alphayax\freebox\api\v3\services\config\Connection;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Ftth
 * @package alphayax\freebox\api\v3\services\config\Connection
 */
class Ftth extends Service{

    const API_CONNECTION_FTTH = '/api/v3/connection/ftth/';

    /**
     * Get the current Connection status
     * @return models\Connection\Status
     */
    public function getStatus(){
        $rest = $this->getAuthService( self::API_CONNECTION_FTTH);
        $rest->GET();

        return $rest->getResult( models\Connection\Ftth\Status::class);
    }

}
