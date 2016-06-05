<?php
namespace alphayax\freebox\api\v3\models\WiFi\AccessPoint;
use alphayax\freebox\api\v3\Model;

/**
 * Class AP
 * @package alphayax\freebox\api\v3\models\WiFi\AccessPoint
 */
class AP extends Model {

    /** @var int (Read-only) : wifi ap id */
    protected $id;

    /** @var string (Read-only) : wifi ap name */
    protected $name;

    /** @var APStatus (Read-only) : ap status */
    protected $status;

    /** @var APCapabilities (Read-only) : ap capabilities */
    protected $capabilities;

    /** @var APConfig : ap configuration */
    protected $config;

    /**
     * AP constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'status'       , APStatus::class);
        $this->initProperty( 'capabilities' , APCapabilities::class);
        $this->initProperty( 'config'       , APConfig::class);
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
    public function getName() {
        return $this->name;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\WiFi\AccessPoint\APStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\WiFi\AccessPoint\ApCapabilities
     */
    public function getCapabilites() {
        return $this->capabilites;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\WiFi\AccessPoint\APConfig
     */
    public function getConfig() {
        return $this->config;
    }

    /**
     * @param \alphayax\freebox\api\v3\models\WiFi\AccessPoint\APConfig $config
     */
    public function setConfig( $config) {
        $this->config = $config;
    }

}
