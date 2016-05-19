<?php
namespace alphayax\freebox\api\v3\symbols\Lan;

/**
 * Interface LanHostType
 * @package alphayax\freebox\api\v3\symbols\Lan
 */
interface LanHostType {
    const WORKSTATION        = 'workstation';
    const LAPTOP             = 'laptop';
    const SMARTPHONE         = 'smartphone';
    const TABLET             = 'tablet';
    const PRINTER            = 'printer';
    const VIDEO_GAME_CONSOLE = 'vg_console';
    const TELEVISION         = 'television';
    const NAS                = 'nas';
    const IP_CAMERA          = 'ip_camera';
    const IP_PHONE           = 'ip_phone';
    const FREEBOX_PLAYER     = 'freebox_player';
    const FREEBOX_SERVER     = 'freebox_hd';
    const NETWORKING_DEVICE  = 'networking_device';
    const MULTIMEDIA_DEVICE  = 'multimedia_device';
    const OTHER              = 'other';
}
