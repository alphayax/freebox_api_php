<?php
namespace alphayax\freebox\api\v3\symbols\RRD;

/**
 * Symbol Db
 * @package alphayax\freebox\api\v3\symbols\RRD
 */
interface Db {

    /** network stats */
    const NETWORK = 'net';

    /** temperature stats */
    const TEMPERATURE = 'temp';

    /** xDSL stats */
    const DSL = 'dsl';

    /** switch stats */
    const FBX_SWITCH = 'switch';

}
