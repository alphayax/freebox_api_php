<?php
namespace alphayax\freebox\api\v3\services\config\Connection\DynDns;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\services;

/**
 * Class NoIP
 * @package alphayax\freebox\api\v3\services\config\Connection\DynDns
 */
class NoIP extends services\config\Connection\DynDns {

    const PROVIDER_NOIP = 'noip';

    /**
     * @inheritdoc
     * @return \alphayax\freebox\api\v3\models\Connection\DynDns\Status
     */
    public function getStatus(){
        return $this->getStatusFromProvider( self::PROVIDER_NOIP);
    }

    /**
     * @inheritdoc
     * @return models\Connection\DynDns\Config
     */
    public function getConfig(){
        return $this->getConfigFromProvider( self::PROVIDER_NOIP);
    }

    /**
     * @inheritdoc
     * @param models\Connection\DynDns\Config $config
     * @return models\Connection\DynDns\Config
     */
    public function setConfig( models\Connection\DynDns\Config $config){
        return $this->setConfigFromProvider( self::PROVIDER_NOIP, $config);
    }

}