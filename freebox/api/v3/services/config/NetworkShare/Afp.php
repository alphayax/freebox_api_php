<?php
namespace alphayax\freebox\api\v3\services\config\NetworkShare;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Afp
 * @package alphayax\freebox\api\v3\services\config\NetworkShare
 */
class Afp extends ServiceAuth {

    const API_NETWORK_SHARE_AFP = '/api/v3/netshare/afp/';

    /**
     * Get the current Afp configuration
     * @return \alphayax\freebox\api\v3\models\NetworkShare\AfpConfig
     */
    public function getConfiguration(){
        $rest = $this->getService( self::API_NETWORK_SHARE_AFP);
        $rest->GET();

        return $rest->getResult( models\NetworkShare\AfpConfig::class);
    }

    /**
     * Update the Afp configuration
     * @param \alphayax\freebox\api\v3\models\NetworkShare\AfpConfig $afpConfig
     * @return \alphayax\freebox\api\v3\models\NetworkShare\AfpConfig
     */
    public function setConfiguration( models\NetworkShare\AfpConfig $afpConfig){
        $rest = $this->getService( self::API_NETWORK_SHARE_AFP);
        $rest->PUT( $afpConfig);

        return $rest->getResult( models\NetworkShare\AfpConfig::class);
    }

}
