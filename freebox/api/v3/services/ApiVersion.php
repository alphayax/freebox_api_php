<?php
namespace alphayax\freebox\api\v3\services;
use alphayax\freebox\api\v3\Service;

/**
 * Class Version
 * @package alphayax\freebox\api\v3\services
 */
class ApiVersion extends Service {

    const API_VERSION = '/api_version';

    /**
     * Return a mapping of information about the api
     * @return array
     */
    public function getApiVersion() {
        $rest = $this->getService( static::API_VERSION);
        $rest->setIsResponseToCheck( false);
        $rest->GET();

        return $rest->getCurlResponse();
    }

}
