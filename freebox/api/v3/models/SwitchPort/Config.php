<?php
namespace alphayax\freebox\api\v3\models\SwitchPort;
use alphayax\freebox\utils\Model;
use alphayax\freebox\api\v3\symbols;

/**
 * Class Config
 * @package alphayax\freebox\api\v3\models\SwitchPort
 */
class Config extends Model {

    /** @var int (Read-only) : switch port id */
    protected $id;

    /** @var string */
    protected $duplex;

    /** @var string|int */
    protected $speed;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     * @see symbols\SwitchPort\Config\Duplex
     */
    public function getDuplex() {
        return $this->duplex;
    }

    /**
     * @param string $duplex
     * @see symbols\SwitchPort\Config\Duplex
     */
    public function setDuplex($duplex) {
        $this->duplex = $duplex;
    }

    /**
     * @return int|string
     * @see symbols\SwitchPort\Config\Speed
     */
    public function getSpeed() {
        return $this->speed;
    }

    /**
     * @param int|string $speed
     * @see symbols\SwitchPort\Config\Speed
     */
    public function setSpeed($speed) {
        $this->speed = $speed;
    }

}
