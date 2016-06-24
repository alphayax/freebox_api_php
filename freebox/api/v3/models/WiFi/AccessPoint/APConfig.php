<?php
namespace alphayax\freebox\api\v3\models\WiFi\AccessPoint;
use alphayax\freebox\utils\Model;

/**
 * Class APConfig
 * @package alphayax\freebox\api\v3\models\WiFi\AccessPoint
 */
class APConfig extends Model {

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\WiFi\APConfig\Band
     */
    protected $band;

    /** @var int : wanted channel width (in MHz) (20, 40, 80, 160) */
    protected $channel_width;

    /** @var int : wanted primary channel, value of 0 means automatic selection */
    protected $primary_channel;

    /** @var int : wanted secondary channel, value of 0 means automatic selection */
    protected $secondary_channel;

    /** @var bool : enable channels that require DFS */
    protected $dfs_enabled;

    /** @var APHtConfig : wifi ht config */
    protected $ht;

    /**
     * AP constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'ht', APHtConfig::class);
    }

    /**
     * @return string
     */
    public function getBand() {
        return $this->band;
    }

    /**
     * @param string $band
     */
    public function setBand($band) {
        $this->band = $band;
    }

    /**
     * @return int
     */
    public function getChannelWidth() {
        return $this->channel_width;
    }

    /**
     * @param int $channel_width
     */
    public function setChannelWidth($channel_width) {
        $this->channel_width = $channel_width;
    }

    /**
     * @return int
     */
    public function getPrimaryChannel() {
        return $this->primary_channel;
    }

    /**
     * @param int $primary_channel
     */
    public function setPrimaryChannel($primary_channel) {
        $this->primary_channel = $primary_channel;
    }

    /**
     * @return int
     */
    public function getSecondaryChannel() {
        return $this->secondary_channel;
    }

    /**
     * @param int $secondary_channel
     */
    public function setSecondaryChannel($secondary_channel) {
        $this->secondary_channel = $secondary_channel;
    }

    /**
     * @return boolean
     */
    public function isDfsEnabled() {
        return $this->dfs_enabled;
    }

    /**
     * @param boolean $dfs_enabled
     */
    public function setDfsEnabled($dfs_enabled) {
        $this->dfs_enabled = $dfs_enabled;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\WiFi\AccessPoint\APHtConfig
     */
    public function getHt() {
        return $this->ht;
    }

    /**
     * @param \alphayax\freebox\api\v3\models\WiFi\AccessPoint\APHtConfig $ht
     */
    public function setHt($ht) {
        $this->ht = $ht;
    }
    
}
