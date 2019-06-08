<?php
namespace alphayax\freebox\api\v6\services\Home;

use alphayax\freebox\api\v6\models\Home\Endpoint;
use alphayax\freebox\utils\FreeboxResponse;
use alphayax\freebox\utils\ServiceAuth;

class EndpointValues extends ServiceAuth
{
    const ENDPOINT = '/api/v6/home/endpoints/';

    /**
     * Get endpoint value.
     * @param $nodeId
     * @param $endpointId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getEndpointValue($nodeId, $endpointId)
    {
        $response = $this->callService('GET', $this->getUrl($nodeId, $endpointId));
        $result = $response->getResult();
        return $result['value'];
    }

    /**
     * Set endpoint value.
     * @param int                 $nodeId
     * @param int                 $endpointId
     * @param int|float|bool|null $value
     * @return bool|float|int|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function setEndpointValue($nodeId, $endpointId, $value = null)
    {
        $response = $this->callService('PUT', $this->getUrl($nodeId, $endpointId), ['value' => $value]);
        return $this->getValueFromResponse($response);
    }

    /**
     * Return value from response.
     * @param FreeboxResponse $response
     * @return bool|int|float|null
     */
    private function getValueFromResponse($response)
    {
        $result = $response->getResult();
        return $result['value'];
    }

    /**
     * Return endpoint id.
     * @param int $nodeId
     * @param int $endpointId
     * @return string
     */
    private function getUrl($nodeId, $endpointId)
    {
        return self::ENDPOINT.$nodeId.'/'.$endpointId;
    }
}
