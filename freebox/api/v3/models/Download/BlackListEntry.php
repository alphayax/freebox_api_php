<?php
namespace alphayax\freebox\api\v3\models\Download;
use alphayax\freebox\utils\Model;

/**
 * Class BlackListEntry
 * @package alphayax\freebox\api\v3\models\Download
 */
class BlackListEntry extends Model {

    /** @var string (Read-only) : entry ip */
    protected $host;

    /**
     * @var string (Read-only) : blacklist reason
     * @see alphayax\freebox\api\v3\symbols\Download\BlackListEntry\Reason
     */
    protected $reason;

    /** @var int (Read-only) : time left before blacklist removal */
    protected $expire;

    /** @var bool (Read-only) : does this entry applies to all torrents */
    protected $global;

    /**
     * @return string
     */
    public function getHost() {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * @return int
     */
    public function getExpire() {
        return $this->expire;
    }

    /**
     * @return boolean
     */
    public function isGlobal() {
        return $this->global;
    }

}
