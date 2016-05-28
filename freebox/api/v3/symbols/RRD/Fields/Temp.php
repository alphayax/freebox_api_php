<?php
namespace alphayax\freebox\api\v3\symbols\RRD\Fields;

/**
 * Symbol Temp
 * @package alphayax\freebox\api\v3\symbols\RRD\Fields
 */
interface Temp {

    /** temperature cpum (in °C) */
    const CPUM = 'cpum';

    /** temperature cpub (in °C) */
    const CPUB = 'cpub';

    /** temperature sw (in °C) */
    const SW = 'sw';

    /** temperature hdd (in °C) */
    const HDD = 'hdd';

    /** fan rpm */
    const FAN_SPEED = 'fan_speed';

    /**
     * temperature sensor 1 (in °C)
     * @deprecated use cpum
     */
    const TEMP1 = 'temp1';

    /**
     * temperature sensor 2 (in °C)
     * @deprecated use cpub
     */
    const TEMP2 = 'temp2';

    /**
     * temperature sensor 3 (in °C)
     * @deprecated use sw
     */
    const TEMP3 = 'temp3';
}
