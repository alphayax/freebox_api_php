<?php

namespace alphayax\freebox\api\common\services;

use alphayax\freebox\utils\Service;

/**
 * Class Version
 * @package alphayax\freebox\api\v3\services
 */
class ApiVersion extends Service
{
    const API_VERSION = '/api_version';

    /**
     * Return a mapping of information about the api
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getApiVersion()
    {
        $result = $this->callService('GET', static::API_VERSION);

        return $result->getJson();
    }

}
