<?php
namespace alphayax\freebox\utils;

/**
 * Class Model
 * @package alphayax\freebox\api\v3
 */
abstract class Model implements \JsonSerializable {

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
     * Convert a property into a given class
     * @param string $propertyName
     * @param string $propertyClass
     */
    protected function initProperty( $propertyName, $propertyClass){
        if( property_exists( static::class, $propertyName) && ! empty( $this->$propertyName)){
            $this->$propertyName = new $propertyClass( $this->$propertyName);
        }
    }

    /**
     * Convert a property into an array of the given class
     * @param string $propertyName
     * @param string $propertyClass
     */
    protected function initPropertyArray( $propertyName, $propertyClass){
        if( property_exists( static::class, $propertyName) && is_array( $this->$propertyName)){
            $newProperty = [];
            foreach( $this->$propertyName as $PropertyItem){
                if( is_array( $PropertyItem)){
                    $newProperty[] = new $propertyClass( $PropertyItem);
                }
            }
            $this->$propertyName = $newProperty;
        }
    }

    /**
     * Return an array representation of the model properties
     * @return array
     */
    public function toArray(){
        $ModelArray = [];
        foreach( get_object_vars( $this) as $propertyName => $propertyValue){
            if( is_subclass_of( $propertyValue, Model::class)){
                /** @var $propertyValue Model */
                $ModelArray[$propertyName] = $propertyValue->toArray();
            } else {
                $ModelArray[$propertyName] = $propertyValue;
            }
        }
        return $ModelArray;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() {
        return $this->toArray();
    }

}
