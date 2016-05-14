<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\models\FtpConfig;
use alphayax\freebox\api\v3\Service;


/**
 * Class FTP
 * @package alphayax\freebox\api\v3\config
 * @author <alphayax@gmail.com>
 */
class FTP extends Service {

    const API_FTP_CONFIG = '/api/v3/ftp/config/';

    /**
     * @throws \Exception
     * @return FtpConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_FTP_CONFIG);
        $rest->GET();

        return new FtpConfig( $rest->getCurlResponse());
    }

    /**
     * @param FtpConfig $new_configConfig
     * @return FtpConfig
     * @throws \Exception
     */
    public function setConfiguration( FtpConfig $new_configConfig){
        $rest = $this->getAuthService( self::API_FTP_CONFIG);
        $rest->PUT( $new_configConfig);

        return new FtpConfig( $rest->getCurlResponse());
    }

}
