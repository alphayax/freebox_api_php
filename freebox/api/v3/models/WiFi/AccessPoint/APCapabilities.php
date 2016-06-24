<?php
namespace alphayax\freebox\api\v3\models\WiFi\AccessPoint;
use alphayax\freebox\utils\Model;

/**
 * Class ApCapabilities
 * @package alphayax\freebox\api\v3\models\WiFi\AccessPoint
 */
class APCapabilities extends Model {

    /** @var int (Read-only) : array map of capabilities in 2.4 GHz band */
    protected $_2d4g;

    /** @var int (Read-only) : array map of capabilities in 5 GHz band */
    protected $_5g;

    /** @var int (Read-only) : array map of capabilities in 60 GHz band */
    protected $_60g;

    /**
     * APCapabilities constructor.
     * @param array $properties_x
     */
    public function __construct( $properties_x = []){
        $this->_2d4g = @$properties_x['2d4g'];
        $this->_5g   = @$properties_x['5g'];
        $this->_60g  = @$properties_x['60g'];
    }

    /**
     * @return int
     */
    public function get2d4g() {
        return $this->_2d4g;
    }

    /**
     * @return int
     */
    public function get5g() {
        return $this->_5g;
    }

    /**
     * @return int
     */
    public function get60g() {
        return $this->_60g;
    }

}
