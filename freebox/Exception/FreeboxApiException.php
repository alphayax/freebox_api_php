<?php
namespace alphayax\freebox\Exception;

/**
 * Class FreeboxException
 * @package alphayax\freebox\Exception
 */
class FreeboxApiException extends \Exception {

    /** @var string */
    protected $apiMessage;

    /** @var string */
    protected $apiErrorCode;

    /** @var string */
    protected $apiRequest;

    /** @var string */
    protected $apiHost;

    /**
     * @return string
     */
    public function getApiMessage() {
        return $this->apiMessage;
    }

    /**
     * @return string
     */
    public function getApiErrorCode() {
        return $this->apiErrorCode;
    }

    /**
     * @return string
     */
    public function getApiRequest() {
        return $this->apiRequest;
    }

    /**
     * @return string
     */
    public function getApiHost() {
        return $this->apiHost;
    }

    /**
     * @param $message
     */
    public function setApiMessage( $message) {
        $this->apiMessage = $message;
    }

    /**
     * @param $apiErrorCode
     */
    public function setApiErrorCode( $apiErrorCode) {
        $this->apiErrorCode = $apiErrorCode;
    }

    /**
     * @param $apiRequest
     */
    public function setApiRequest( $apiRequest) {
        $this->apiRequest = $apiRequest;
    }

    /**
     * @param $apiHost
     */
    public function setApiHost( $apiHost) {
        $this->apiHost = $apiHost;
    }

}
