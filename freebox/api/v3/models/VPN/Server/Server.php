<?php
namespace alphayax\freebox\api\v3\models\VPN\Server;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\symbols;

/**
 * Class Server
 * @package alphayax\freebox\api\v3\models\VPN
 */
class Server extends Model {

    /** @var string (Read-only) : VPN server name (id) */
    protected $name;

    /** @var string (Read-only) : VPN server type */
    protected $type;

    /** @var string (Read-only) : server state */
    protected $state;

    /** @var int (Read-only) : number of active connections */
    protected $connection_count;

    /** @var int (Read-only) : number of active connections that have passed authentication */
    protected $auth_connection_count;

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return string
     * @see symbols\VPN\Server\Type
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @return string
     * @see symbols\VPN\Server\State
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @return int
     */
    public function getConnectionCount() {
        return $this->connection_count;
    }

    /**
     * @return int
     */
    public function getAuthConnectionCount() {
        return $this->auth_connection_count;
    }

}
