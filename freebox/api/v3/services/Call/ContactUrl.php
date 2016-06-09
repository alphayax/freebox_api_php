<?php
namespace alphayax\freebox\api\v3\services\Call;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;


/**
 * Class ContactUrl
 * @package alphayax\freebox\api\v3\services\Call
 */
class ContactUrl extends Service {

    const API_URL = '/api/v3/url/';

    /**
     * @param int $ContactUrlId
     * @return models\Call\ContactUrl
     */
    public function getFromId( $ContactUrlId){
        $rest = $this->getAuthService( self::API_URL . $ContactUrlId);
        $rest->GET();

        return $rest->getResult( models\Call\ContactUrl::class);
    }

    /**
     * @param models\Call\ContactUrl  $ContactUrl
     * @return models\Call\ContactUrl
     */
    public function create( models\Call\ContactUrl $ContactUrl){
        $rest = $this->getAuthService( self::API_URL);
        $rest->POST( $ContactUrl);

        return $rest->getResult( models\Call\ContactUrl::class);
    }

    /**
     * @param models\Call\ContactUrl  $ContactUrl
     * @return bool
     */
    public function delete( models\Call\ContactUrl $ContactUrl){
        return $this->deleteFromId( $ContactUrl->getId());
    }

    /**
     * @param int $ContactUrlId
     * @return bool
     */
    public function deleteFromId( $ContactUrlId){
        $rest = $this->getAuthService( self::API_URL . $ContactUrlId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * @param models\Call\ContactUrl  $ContactUrl
     * @return models\Call\ContactUrl
     */
    public function update( models\Call\ContactUrl $ContactUrl){
        $rest = $this->getAuthService( self::API_URL . $ContactUrl->getId());
        $rest->PUT( $ContactUrl);

        return $rest->getResult( models\Call\ContactUrl::class);
    }

}
