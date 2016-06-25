<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class FTP
 * @package alphayax\freebox\api\v3\config
 * @author <alphayax@gmail.com>
 */
class FTP extends ServiceAuth {

    const API_FTP_CONFIG = '/api/v3/ftp/config/';

    /**
     * Get the current FTP configuration
     * @return models\FtpConfig
     */
    public function getConfiguration(){
        $rest = $this->getService( self::API_FTP_CONFIG);
        $rest->GET();

        return $rest->getResult( models\FtpConfig::class);
    }

    /**
     * @param models\FtpConfig $ftpConfig
     * @return models\FtpConfig
     */
    public function setConfiguration( models\FtpConfig $ftpConfig){
        $rest = $this->getService( self::API_FTP_CONFIG);
        $rest->PUT( $ftpConfig);

        return $rest->getResult( models\FtpConfig::class);
    }

}
