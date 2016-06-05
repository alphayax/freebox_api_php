<?php
namespace alphayax\freebox\api\v3\symbols\WiFi\Station;

/**
 * Symbol State
 * @package alphayax\freebox\api\v3\symbols\WiFi\Station
 * @see alphayax\freebox\api\v3\models\WiFi\APStation\Station
 */
interface State {

    /** station is associated */
    const ASSOCIATED = 'associated';

    /** station is authenticated */
    const AUTHENTICATED = 'authenticated';
}
