<?php
namespace alphayax\freebox\api\v3\models\Connection\Ipv6;
use alphayax\freebox\utils\Model;

/**
 * Class Delegation
 * @package alphayax\freebox\api\v3\models\Connection\Ipv6
 */
class Delegation extends Model {

    /** @var string : IPv6 prefix */
    protected $prefix;

    /** @var string ipv6 : the next hop for the prefix */
    protected $next_hop;

    /**
     * @return string
     */
    public function getPrefix() {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     */
    public function setPrefix( $prefix){
        $this->prefix = $prefix;
    }

    /**
     * @return string
     */
    public function getNextHop(){
        return $this->next_hop;
    }

    /**
     * @param string $next_hop
     */
    public function setNextHop( $next_hop){
        $this->next_hop = $next_hop;
    }

}
