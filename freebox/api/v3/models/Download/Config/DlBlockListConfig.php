<?php
namespace alphayax\freebox\api\v3\models\Download\Config;
use alphayax\freebox\api\v3\Model;

/**
 * Class DlBlockListConfig
 * @package alphayax\freebox\api\v3\models\Download\Config
 */
class DlBlockListConfig extends Model {

    /**
     * @var string[] : list of block list URL source
     * The block list should be in cidr format
     * @see http://list.iblocklist.com/?list=bt_level1&fileformat=cidr&archiveformat=
     */
    protected $sources = [];

    /**
     * @return \string[]
     */
    public function getSources() {
        return $this->sources;
    }

    /**
     * @param \string[] $sources
     */
    public function setSources( $sources) {
        $this->sources = $sources;
    }

    /**
     * @param \string $source
     */
    public function addSource( $source) {
        $this->sources[] = $source;
    }

}
