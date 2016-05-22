<?php
namespace alphayax\freebox\api\v3\services\config\Connection\DynDns;
use alphayax\freebox\api\v3\services;
use alphayax\freebox\api\v3\models;

/**
 * Class DynDns
 * @package alphayax\freebox\api\v3\services\config\Connection\DynDns
 */
class DynDns extends services\config\Connection\DynDns {

    const PROVIDER_DYNDNS = 'dyndns';

    /**
     * @inheritdoc
     * @return \alphayax\freebox\api\v3\models\Connection\DynDns\Status
     */
    public function getStatus(){
        return $this->getStatusFromProvider( self::PROVIDER_DYNDNS);
    }

    /**
     * @inheritdoc
     * @return models\Connection\DynDns\Config
     */
    public function getConfig(){
        return $this->getConfigFromProvider( self::PROVIDER_DYNDNS);
    }

    /**
     * @inheritdoc
     * @param models\Connection\DynDns\Config $config
     * @return models\Connection\DynDns\Config
     */
    public function setConfig( models\Connection\DynDns\Config $config){
        return $this->setConfigFromProvider( self::PROVIDER_DYNDNS, $config);
    }

}