<?php
namespace alphayax\tests\models;


use alphayax\freebox\api\v3\models\AirMedia\AirMediaConfig;

class AirMediaConfigTest extends \PHPUnit_Framework_TestCase {

    public function modelProvider(){

        $data = [
            'enabled' => true,
        ];

        return [
            [new AirMediaConfig( $data), $data],
        ];
    }

    /**
     * @dataProvider modelProvider
     * @param AirMediaConfig $model
     * @param array $data
     */
    public function testConstruct( $model, $data){
        $this->assertAttributeEquals( $data['enabled'], 'enabled', $model);
    }

    /**
     * @dataProvider modelProvider
     * @param AirMediaConfig $model
     * @param array $data
     */
    public function testGetters( $model, $data) {
        $this->assertEquals( $model->isEnabled(), $data['enabled']);
    }

    /**
     * @dataProvider modelProvider
     * @param AirMediaConfig $model
     * @param array $data
     */
    public function testSetters( $model, $data) {
        $model->setEnabled( false);
        $this->assertAttributeEquals( false, 'enabled', $model);

        $model->setPassword( 'azerty');
        $this->assertAttributeEquals( 'azerty', 'password', $model);
    }

    /**
     * @dataProvider modelProvider
     * @param AirMediaConfig $model
     * @param array $data
     */
    public function testSerialize( $model, $data){
        $json = json_encode( $model);
        $this->assertNotFalse( $json);
    }

}
