<?php
namespace alphayax\freebox\api\v3\models\WiFi\Bss;
use alphayax\freebox\api\v3\Model;

/**
 * Class Bss
 * @package alphayax\freebox\api\v3\models\WiFi\Bss
 */
class Bss extends Model {

    /** @var int (Read-only) : bss id */
    protected $id;

    /** @var string (Read-only) : associated AP id */
    protected $phy_id;

    /** @var Status (Read-only) : bss status */
    protected $status;

    /** @var Config : bss configuration */
    protected $config;

    /**
     * Bss constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'status', Status::class);
        $this->initProperty( 'config', Config::class);
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPhyId() {
        return $this->phy_id;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\WiFi\Bss\Status
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\WiFi\Bss\Config
     */
    public function getConfig() {
        return $this->config;
    }

    /**
     * @param \alphayax\freebox\api\v3\models\WiFi\Bss\Config $config
     */
    public function setConfig($config) {
        $this->config = $config;
    }

}
