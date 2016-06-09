<?php
namespace alphayax\freebox\api\v3\models\ParentalControl;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\symbols;

/**
 * Class FilterConfig
 * @package alphayax\freebox\api\v3\models\ParentalControl
 */
class FilterConfig extends Model {

    /**
     * @var string
     * @see symbols\ParentalControl\FilterState
     */
    protected $default_filter_mode;

    /**
     * @return string
     */
    public function getDefaultFilterMode() {
        return $this->default_filter_mode;
    }

    /**
     * @param string $default_filter_mode
     */
    public function setDefaultFilterMode($default_filter_mode) {
        $this->default_filter_mode = $default_filter_mode;
    }

}
