<?php
namespace alphayax\freebox\api\v3\services\config\NetworkShare;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Samba
 * @package alphayax\freebox\api\v3\services\config\NetworkShare
 */
class Samba extends Service {

    const API_NETWORK_SHARE_SAMBA = '/api/v3/netshare/samba/';

    /**
     * Get the current Samba configuration
     * @return \alphayax\freebox\api\v3\models\NetworkShare\SambaConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_NETWORK_SHARE_SAMBA);
        $rest->GET();

        return $rest->getResult( models\NetworkShare\SambaConfig::class);
    }

    /**
     * Update the Samba configuration
     * @param \alphayax\freebox\api\v3\models\NetworkShare\SambaConfig $sambaConfig
     * @return \alphayax\freebox\api\v3\models\NetworkShare\SambaConfig
     */
    public function setConfiguration( models\NetworkShare\SambaConfig $sambaConfig){
        $rest = $this->getAuthService( self::API_NETWORK_SHARE_SAMBA);
        $rest->PUT( $sambaConfig);

        return $rest->getResult( models\NetworkShare\SambaConfig::class);
    }

}
