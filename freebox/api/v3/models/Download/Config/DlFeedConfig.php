<?php
namespace alphayax\freebox\api\v3\models\Download\Config;
use alphayax\freebox\api\v3\Model;

/**
 * Class DlFeedConfig
 * @package alphayax\freebox\api\v3\models\Download\Config
 */
class DlFeedConfig extends Model {

    /** @var int : interval between automatic RSS refresh (in minutes) */
    protected $fetch_interval;

    /** @var int : maximum feed item to keep */
    protected $max_items;

    /**
     * @return int
     */
    public function getFetchInterval() {
        return $this->fetch_interval;
    }

    /**
     * @param int $fetch_interval
     */
    public function setFetchInterval( $fetch_interval) {
        $this->fetch_interval = $fetch_interval;
    }

    /**
     * @return int
     */
    public function getMaxItems() {
        return $this->max_items;
    }

    /**
     * @param int $max_items
     */
    public function setMaxItems( $max_items) {
        $this->max_items = $max_items;
    }

}
