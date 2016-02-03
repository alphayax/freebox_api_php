<?php
namespace alphayax\freebox\api\v3;

/**
 * Class Model
 * @package alphayax\freebox\api\v3
 */
abstract class Model {

    /**
     * Model constructor.
     * @param array $properties_x mapping of properties
     */
    public function __construct( $properties_x = []){
        foreach( $properties_x as $property => $value){
            if( property_exists( static::class, $property)){
                $this->$property = $value;
            }
        }
    }

}