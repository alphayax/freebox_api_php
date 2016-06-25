<?php
namespace alphayax\freebox\api\v3\services\Call;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class System
 * @package alphayax\freebox\api\v3\services\config
 */
class CallEntry extends ServiceAuth {

    const API_CALL_LOG = '/api/v3/call/log/';

    /**
     * List every calls
     * @throws \Exception
     * @return models\Call\CallEntry[]
     */
    public function getAll(){
        $rest = $this->getService( self::API_CALL_LOG);
        $rest->GET();

        return $rest->getResultAsArray( models\Call\CallEntry::class);
    }

    /**
     * Access a given call entry
     * @param int $CallId
     * @return models\Call\CallEntry[]
     */
    public function getFromId( $CallId){
        $rest = $this->getService( self::API_CALL_LOG . $CallId);
        $rest->GET();

        return $rest->getResult( models\Call\CallEntry::class);
    }

    /**
     * Delete a call entry
     * @param models\Call\CallEntry $CallEntry
     * @return bool
     */
    public function delete( models\Call\CallEntry $CallEntry){
        return $this->deleteFromId( $CallEntry->getId());
    }

    /**
     * Delete a call entry
     * @param int $CallId
     * @return bool
     */
    public function deleteFromId( $CallId){
        $rest = $this->getService( self::API_CALL_LOG . $CallId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Update a given call entry
     * @param models\Call\CallEntry $CallEntry
     * @return models\Call\CallEntry
     */
    public function update( models\Call\CallEntry $CallEntry){
        $rest = $this->getService( self::API_CALL_LOG . $CallEntry->getId());
        $rest->PUT( $CallEntry);

        return $rest->getResult( models\Call\CallEntry::class);
    }
    
}
