<?php
namespace alphayax\freebox\api\v3\models\SwitchPort;
use alphayax\freebox\utils\Model;
use alphayax\freebox\api\v3\symbols;

/**
 * Class Status
 * @package alphayax\freebox\api\v3\models\SwitchPort
 */
class Status extends Model {

    /** @var int (Read-only) : switch port id */
    protected $id;

    /** @var string (Read-only) */
    protected $link;

    /** @var string */
    protected $duplex;

    /** @var int */
    protected $speed;

    /** @var string (Read-only) : display form of speed and duplex mode */
    protected $mode;

    /** @var array (Read-only) : list of { mac, name } of hosts connected to this port */
    protected $mac_list;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     * @see symbols\SwitchPort\Status\Link
     */
    public function getLink() {
        return $this->link;
    }

    /**
     * @return string
     * @see symbols\SwitchPort\Status\Duplex
     */
    public function getDuplex() {
        return $this->duplex;
    }

    /**
     * @param string $duplex
     * @see symbols\SwitchPort\Status\Duplex
     */
    public function setDuplex( $duplex) {
        $this->duplex = $duplex;
    }

    /**
     * @return int
     * @see symbols\SwitchPort\Status\Speed
     */
    public function getSpeed() {
        return $this->speed;
    }

    /**
     * @param int $speed
     * @see symbols\SwitchPort\Status\Speed
     */
    public function setSpeed( $speed) {
        $this->speed = $speed;
    }

    /**
     * @return string
     */
    public function getMode() {
        return $this->mode;
    }

    /**
     * @return array
     */
    public function getMacList() {
        return $this->mac_list;
    }

}
