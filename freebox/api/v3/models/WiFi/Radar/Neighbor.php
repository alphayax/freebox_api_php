<?php
namespace alphayax\freebox\api\v3\models\WiFi\Radar;
use alphayax\freebox\api\v3\Model;

/**
 * Class Neighbor
 * @package alphayax\freebox\api\v3\models\WiFi
 */
class Neighbor extends Model {

    /** @var string (Read-only) : neighbor bssid */
    protected $bssid;

    /** @var string (Read-only) : neighbor ssid */
    protected $ssid;

    /**
     * @var string (Read-only) : the band for which the combination can be used
     * @see alphayax\freebox\api\v3\symbols\WiFi\APConfig\Band
     */
    protected $band;

    /** @var int (Read-only) : neighbor channel_width */
    protected $channel_width;

    /** @var int (Read-only) : neighbor primary channel */
    protected $channel;

    /** @var int (Read-only) : neighbor secondary channel (0 for unused) */
    protected $secondary_channel;

    /** @var int (Read-only) : signal attenuation in dB */
    protected $signal;

    /** @var NeighborCap (Read-only) : neighbor capabilities */
    protected $capabilities;

    /**
     * @return string
     */
    public function getBssid() {
        return $this->bssid;
    }

    /**
     * @return string
     */
    public function getSsid() {
        return $this->ssid;
    }

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\WiFi\APConfig\Band
     */
    public function getBand() {
        return $this->band;
    }

    /**
     * @return int
     */
    public function getChannelWidth() {
        return $this->channel_width;
    }

    /**
     * @return int
     */
    public function getChannel() {
        return $this->channel;
    }

    /**
     * @return int
     */
    public function getSecondaryChannel() {
        return $this->secondary_channel;
    }

    /**
     * @return int
     */
    public function getSignal() {
        return $this->signal;
    }

    /**
     * @return NeighborCap
     */
    public function getCapabilities() {
        return $this->capabilities;
    }


}
