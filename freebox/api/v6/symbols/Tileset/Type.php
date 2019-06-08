<?php
namespace alphayax\freebox\api\v6\symbols\Tileset;

interface Type
{
    /** A button tile that present no data */
    const ACTION = 'action';
    /** A generic tile that displays datas according to their UI field */
    const INFO = 'info';
    /** A light control tile with color, intensity and head pickers */
    const LIGHT = 'light';
    /** A tile representing a sensor that belongs to an alarm system */
    const ALARM_SENSOR = 'alarm_sensor';
    /** A tile representing an alarm system control */
    const ALARM_CONTROL = 'alarm_control';
    /** A tile representing a camera */
    const CAMERA = 'camera';
}
