<?php

namespace alphayax\freebox\api\v4\services\download;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Peer
 * @package alphayax\freebox\api\v4\services\download
 * @experimental
 */
class Peer extends ServiceAuth
{
    const API_DOWNLOAD_PEERS = '/api/v4/downloads/%u/peers';

    /**
     * Get the list of peers for a given Download
     * Attempting to call this method on a download other than bittorent will fail
     * @param int $downloadTaskId
     * @return models\Download\Peer[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getAll($downloadTaskId)
    {
        $service = sprintf(self::API_DOWNLOAD_PEERS, $downloadTaskId);
        $rest    = $this->callService('GET', $service);

        return $rest->getModels(models\Download\Peer::class);
    }

}
