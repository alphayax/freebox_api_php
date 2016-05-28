<?php
namespace alphayax\freebox\api\v3\symbols\SwitchPort\Config;

/**
 * Symbol Speed
 * @package alphayax\freebox\api\v3\symbols\SwitchPort\Config
 * @see alphayax\freebox\api\v3\models\SwitchPort\Config
 */
interface Speed {

    /** auto negotiate speed */
    const AUTO = 'auto';

    /** 10Base-T */
    const BASE_10 = 10;

    /** 100Base-TX */
    const BASE_100 = 100;

    /** 1000Base-T */
    const BASE_1000 = 1000;
}
