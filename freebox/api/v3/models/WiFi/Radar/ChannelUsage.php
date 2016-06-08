<?php
namespace alphayax\freebox\api\v3\models\WiFi\Radar;
use alphayax\freebox\api\v3\Model;

/**
 * Class ChannelUsage
 * @package alphayax\freebox\api\v3\models\WiFi\Radar
 */
class ChannelUsage extends Model {

    /** @var int (Read-only) : channel number */
    protected $channel;

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\WiFi\APConfig\Band
     */
    protected $band;

    /** @var int (Read-only) : noise level on channel in dB */
    protected $noise_level;

    /** @var int (Read-only) : rx channel busy time percentage */
    protected $rx_busy_percent;

    /**
     * @return int
     */
    public function getChannel() {
        return $this->channel;
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
    public function getNoiseLevel() {
        return $this->noise_level;
    }

    /**
     * @return int
     */
    public function getRxBusyPercent() {
        return $this->rx_busy_percent;
    }

}
