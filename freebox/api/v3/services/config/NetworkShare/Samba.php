<?php
namespace alphayax\freebox\api\v3\services\config\NetworkShare;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Samba
 * @package alphayax\freebox\api\v3\services\config\NetworkShare
 */
class Samba extends ServiceAuth {

    const API_NETWORK_SHARE_SAMBA = '/api/v3/netshare/samba/';

    /**
     * Get the current Samba configuration
     * @return \alphayax\freebox\api\v3\models\NetworkShare\SambaConfig
     */
    public function getConfiguration(){
        $rest = $this->getService( self::API_NETWORK_SHARE_SAMBA);
        $rest->GET();

        return $rest->getResult( models\NetworkShare\SambaConfig::class);
    }

    /**
     * Update the Samba configuration
     * @param \alphayax\freebox\api\v3\models\NetworkShare\SambaConfig $sambaConfig
     * @return \alphayax\freebox\api\v3\models\NetworkShare\SambaConfig
     */
    public function setConfiguration( models\NetworkShare\SambaConfig $sambaConfig){
        $rest = $this->getService( self::API_NETWORK_SHARE_SAMBA);
        $rest->PUT( $sambaConfig);

        return $rest->getResult( models\NetworkShare\SambaConfig::class);
    }

}
