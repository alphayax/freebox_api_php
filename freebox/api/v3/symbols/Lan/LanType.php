<?php
namespace alphayax\freebox\api\v3\symbols\Lan;

/**
 * Symbol LanType
 * @package alphayax\freebox\api\v3\symbols\Lan
 */
interface LanType {

    /** The Freebox acts as a network router */
    const ROUTER = 'router';

    /** The Freebox acts as a network bridge */
    const BRIDGE = 'bridge';

}