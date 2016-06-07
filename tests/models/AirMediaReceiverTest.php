<?php
namespace alphayax\tests\models;
use alphayax\freebox\api\v3\models\AirMedia\AirMediaReceiver;

/**
 * Class AirMediaReceiverTest
 * @package alphayax\tests\models
 */
class AirMediaReceiverTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return array
     */
    public function modelProvider(){
        $data = <<<JSON
        [
        {
            "capabilities": {
                "photo": true,
                "screen": false,
                "audio": true,
                "video": true
            },
            "name": "Freebox Player",
            "password_protected": true
        },
        {
            "capabilities": {
                "photo": false,
                "screen": false,
                "audio": true,
                "video": false
            },
            "name": "Freebox Server",
            "password_protected": false
        }
    ]
JSON;

        $datas = json_decode( $data, true);
        $provider = [];
        foreach( $datas as $item){
            $provider[] = [new AirMediaReceiver( $item), $item];
        }
        return $provider;
    }

    /**
     * @dataProvider modelProvider
     * @param AirMediaReceiver $model
     * @param array $data
     */
    public function testConstruct( $model, $data){
        $this->assertAttributeEquals( $data['capabilities']      , 'capabilities'       , $model);
        $this->assertAttributeEquals( $data['name']              , 'name'               , $model);
        $this->assertAttributeEquals( $data['password_protected'], 'password_protected' , $model);
    }

    /**
     * @dataProvider modelProvider
     * @param AirMediaReceiver $model
     * @param array $data
     */
    public function testGetters( $model, $data) {
        $this->assertEquals( $model->getCapabilities()      , $data['capabilities']);
        $this->assertEquals( $model->isPasswordProtected()  , $data['password_protected']);
        $this->assertEquals( $model->getName()              , $data['name']);
    }

    /**
     * @dataProvider modelProvider
     * @param AirMediaReceiver $model
     * @param array $data
     */
    public function testSetters( $model, $data) {
        // No setters
    }

    /**
     * @dataProvider modelProvider
     * @param AirMediaReceiver $model
     * @param array $data
     */
    public function testSerialize( $model, $data){
        $json = json_encode( $model);
        $this->assertNotFalse( $json);
        
        $model_x = json_decode( $json, true);
        $this->assertEquals( $model_x, $data);
    }

}
