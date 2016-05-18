<?php
namespace alphayax\freebox\api\v3\models\Freeplug;
use alphayax\freebox\api\v3\Model;

/**
 * Class Freeplug
 * @package alphayax\freebox\api\v3\models\Freeplug
 */
class Freeplug extends Model {

    /** @var string (Read-only) : Freeplug unique id */
    protected $id;

    /** @var bool (Read-only) : if true the Freeplug is connected directly to the Freebox */
    protected $local;

    /**
     * @var string (Read-only) : Freeplug network role
     * @see alphayax\freebox\api\v3\symbols\Freeplug\FreeplugNetRole
     */
    protected $net_role;

    /** @var string (Read-only) : Freebox Server netbios name */
    protected $model;

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Freeplug\FreeplugEthPortStatus
     */
    protected $eth_port_status;

    /** @var bool (Read-only) : ethernet link is full duplex */
    protected $eth_full_duplex;

    /** @var bool (Read-only) : is connected to the network */
    protected $has_network;

    /** @var int (Read-only) : ethernet port speed */
    protected $eth_speed;

    /** @var int (Read-only) : seconds since last activity */
    protected $inactive;

    /** @var string (Read-only) : network id */
    protected $net_id;

    /** @var int (Read-only) : rx rate (from the freeplugs to the “cco” freeplug) (in Mb/s) -1 if not available */
    protected $rx_rate;

    /** @var int (Read-only) : tx rate (from the “cco” freeplug to the freeplugs) (in Mb/s) -1 if not available */
    protected $tx_rate;

    /**
     * @return string
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return boolean
     */
    public function isLocal(){
        return $this->local;
    }

    /**
     * @return string
     */
    public function getNetRole(){
        return $this->net_role;
    }

    /**
     * @return string
     */
    public function getModel(){
        return $this->model;
    }

    /**
     * @return string
     */
    public function getEthPortStatus(){
        return $this->eth_port_status;
    }

    /**
     * @return boolean
     */
    public function isEthFullDuplex(){
        return $this->eth_full_duplex;
    }

    /**
     * @return boolean
     */
    public function isHasNetwork(){
        return $this->has_network;
    }

    /**
     * @return int
     */
    public function getEthSpeed(){
        return $this->eth_speed;
    }

    /**
     * @return int
     */
    public function getInactive(){
        return $this->inactive;
    }

    /**
     * @return string
     */
    public function getNetId(){
        return $this->net_id;
    }

    /**
     * @return int
     */
    public function getRxRate(){
        return $this->rx_rate;
    }

    /**
     * @return int
     */
    public function getTxRate(){
        return $this->tx_rate;
    }

}
