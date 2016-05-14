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

    /**
     * Return an array representation of the model properties
     * @return array
     */
    public function toArray(){
        return get_object_vars( $this);
    }

}