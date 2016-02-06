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
     * Magic getter
     * @param $name
     * @return null
     */
    function __get( $name){
        if( property_exists( static::class, $name)){
            return $this->$name;
        }
        return null;    // TODO : maybe throw exception ?
    }

    /**
     * Magic setter
     * @param $name
     * @param $value
     */
    public function __set( $name, $value){
        if( property_exists( static::class, $name)){
            $this->$name = $value;
        }
    }

    public function toArray(){

    }

}