<?php
namespace alphayax\tests\models;


use alphayax\freebox\api\v3\models\AirMedia\AirMediaConfig;

class AirMediaConfigTest extends \PHPUnit_Framework_TestCase {


    public function testConstruct(){
        $data = [
            'enabled' => true,
        ];
        $AM_Config = new AirMediaConfig( $data);

        $this->assertAttributeEquals( $data['enabled'], 'enabled', $AM_Config);
    }

    public function testGetters() {

        $data = [
            'enabled' => true,
        ];
        $AM_Config = new AirMediaConfig( $data);

        $this->assertEquals( $AM_Config->isEnabled(), $data['enabled']);
    }

    public function testSetters() {

        $data = [
            'enabled' => true,
        ];
        $AM_Config = new AirMediaConfig( $data);

        $AM_Config->setEnabled( false);
        $this->assertAttributeEquals( false, 'enabled', $AM_Config);

        $AM_Config->setPassword( 'azerty');
        $this->assertAttributeEquals( 'azerty', 'password', $AM_Config);
    }

}
