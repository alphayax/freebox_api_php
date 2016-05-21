<?php
namespace alphayax\freebox\Exception;


class InvalidRequestException extends \Exception {

    protected $http_request_header;

    protected $http_url;

    protected $http_params;

    /**
     * @return mixed
     */
    public function getHttpRequestHeader() {
        return $this->http_request_header;
    }

    /**
     * @param mixed $http_method
     */
    public function setHttpRequestHeader( $http_method) {
        $this->http_request_header = $http_method;
    }

    /**
     * @return mixed
     */
    public function getHttpUrl() {
        return $this->http_url;
    }

    /**
     * @param mixed $http_url
     */
    public function setHttpUrl( $http_url) {
        $this->http_url = $http_url;
    }

    /**
     * @return mixed
     */
    public function getHttpParams() {
        return $this->http_params;
    }

    /**
     * @param mixed $http_params
     */
    public function setHttpParams( $http_params) {
        $this->http_params = $http_params;
    }

}