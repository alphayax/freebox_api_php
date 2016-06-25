<?php
namespace alphayax\freebox\api\v3\services\download;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Peer
 * @package alphayax\freebox\api\v3\services\download
 * @experimental
 */
class Peer extends ServiceAuth {

    const API_DOWNLOAD_PEERS = '/api/v3/downloads/%u/peers';

    /**
     * Get the list of peers for a given Download
     * Attempting to call this method on a download other than bittorent will fail
     * @param int $downloadTaskId
     * @return models\Download\Peer[]
     */
    public function getAll( $downloadTaskId){
        $service = sprintf( self::API_DOWNLOAD_PEERS, $downloadTaskId);
        $rest = $this->getService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\Download\Peer::class);
    }

}
