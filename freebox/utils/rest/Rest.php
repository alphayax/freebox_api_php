<?php
namespace alphayax\freebox\utils\rest;
use alphayax;


/**
 * Class Rest
 * @package alphayax\utils
 * @author <alphayax@gmail.com>
 */
class Rest extends alphayax\utils\Rest {

    /** @var bool */
    protected $isResponseToCheck = true;

    /**
     * @param null $curlPostData
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function GET( $curlPostData = null){
        parent::GET( $curlPostData);
        $this->checkResponse();
    }

    /**
     * @param $curlPostData
     */
    public function POST( $curlPostData = null){
        parent::POST( $curlPostData);
        $this->checkResponse();
    }

    /**
     * @param $curlPostData
     */
    public function PUT( $curlPostData = null){
        parent::PUT( $curlPostData);
        $this->checkResponse();
    }

    /**
     * @param $curlPostData
     */
    public function DELETE( $curlPostData = null){
        parent::DELETE( $curlPostData);
        $this->checkResponse();
    }

    /**
     * @throws \Exception
     */
    protected function checkResponse(){
        $request  = explode( "\r\n", $this->curlGetInfo['request_header'])[0];
        $url      = $this->curlGetInfo['url'];
    //  echo ">> $request ($url)" . PHP_EOL;

        /// Don't need to go further if the response have not to be checked (binary content, non standard response, ...)
        if( ! $this->isResponseToCheck){
            return;
        }

        if( false === $this->getSuccess()){

            $response  = $this->getCurlResponse();
            $Exception = new alphayax\freebox\Exception\FreeboxApiException( $response['msg'] . ' ('. $response['error_code'] . ')');
            $Exception->setApiMessage( $response['msg']);
            $Exception->setApiErrorCode( $response['error_code']);
            $Exception->setApiRequest( $request);
            $Exception->setApiHost( $url);

            throw $Exception;
        }
    }

    /**
     * @param string $className
     * @return array
     */
    public function getResultAsArray( $className = ''){
        $Model_xs = @$this->getCurlResponse()['result'] ?: [];

        /// Cast elements
        if( ! empty( $className) && ! empty( $Model_xs) && is_subclass_of( $className, alphayax\freebox\api\v3\Model::class)) {
            array_walk( $Model_xs, function( &$item, $key, $className){
                $item = new $className( $item);
            }, $className);
        }

        return $Model_xs;
    }

    /**
     * @param string $className
     * @return array|alphayax\freebox\api\v3\Model
     */
    public function getResult( $className = ''){
        $Model = @$this->getCurlResponse()['result'];

        /// Cast element
        if( ! empty( $className) && ! empty( $Model) && is_subclass_of( $className, alphayax\freebox\api\v3\Model::class) && is_array( $Model)){
            return new $className( $Model);
        }

        return $Model;
    }

    /**
     * @return bool
     */
    public function getSuccess(){
        return boolval( $this->getCurlResponse()['success']);
    }

    /**
     * @param boolean $isResponseToCheck
     */
    public function setIsResponseToCheck( $isResponseToCheck = true){
        $this->isResponseToCheck = $isResponseToCheck;
    }

}
