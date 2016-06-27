<?php
namespace alphayax\freebox\api\v3\services\config\VPN\Server;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class User
 * @package alphayax\freebox\api\v3\services\config\VPN\Server
 */
class User extends ServiceAuth {

    const API_VPN_USER          = '/api/v3/vpn/user/';
    const API_VPN_USER_CONFIG   = '/api/v3/vpn/download_config/%s/%s';

    /**
     * Get the list of VPNUser
     * @return models\VPN\Server\User[]
     */
    public function getAll(){
        $rest = $this->getService( self::API_VPN_USER);
        $rest->GET();

        return $rest->getResultAsArray( models\VPN\Server\User::class);
    }

    /**
     * Gets the VPNUser with the given login
     * @param $login
     * @return models\VPN\Server\User
     */
    public function getFromLogin( $login){
        $rest = $this->getService( self::API_VPN_USER . $login);
        $rest->GET();

        return $rest->getResult( models\VPN\Server\User::class);
    }

    /**
     * Creates a new VPNUser
     * @param \alphayax\freebox\api\v3\models\VPN\Server\User $user
     * @return models\VPN\Server\User
     */
    public function add( models\VPN\Server\User $user){
        $rest = $this->getService( self::API_VPN_USER);
        $rest->POST( $user);

        return $rest->getResult( models\VPN\Server\User::class);
    }

    /**
     * Deletes the VPNUser
     * @param \alphayax\freebox\api\v3\models\VPN\Server\User $user
     * @return bool
     */
    public function delete( models\VPN\Server\User $user){
        return $this->deleteFromLogin( $user->getLogin());
    }

    /**
     * Deletes the VPNUser with the given id
     * @param string $login
     * @return bool
     */
    public function deleteFromLogin( $login){
        $rest = $this->getService( self::API_VPN_USER . $login);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Update a VPN Use
     * @param \alphayax\freebox\api\v3\models\VPN\Server\User $user
     * @return models\VPN\Server\User
     */
    public function update( models\VPN\Server\User $user){
        $rest = $this->getService( self::API_VPN_USER . $user->getLogin());
        $rest->PUT( $user);

        return $rest->getResult( models\VPN\Server\User::class);
    }

    /**
     * Generate a new configuration file & download it
     * @param string $serverName
     * @param string $login
     * @return string The content of the configuration file
     */
    public function getConfigurationFile( $serverName, $login){
        $service = sprintf( self::API_VPN_USER_CONFIG, $serverName, $login);
        $rest = $this->getService( $service);
        $rest->getConfig()->setIsReturnToJsonDecode( false);
        $rest->setIsResponseToCheck( false);
        $rest->GET();

        return $rest->getCurlResponse();
    }

}
