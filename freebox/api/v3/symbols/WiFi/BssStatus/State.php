<?php
namespace alphayax\freebox\api\v3\symbols\WiFi\BssStatus;

/**
 * Symbol State
 * @package alphayax\freebox\api\v3\symbols\WiFi\BssStatus
 */
interface State {

    /** associated AP is stopped */
    const PHY_STOPPED = 'phy_stopped';

    /** bss is missing config */
    const NO_PARAM = 'no_param';

    /** bss has an invalid config */
    const BAD_PARAM = 'bad_param';

    /** bss is disabled */
    const DISABLED = 'disabled';

    /** bss is starting */
    const STARTING = 'starting';

    /** bss is active */
    const ACTIVE = 'active';

    /** bss has failed to start */
    const FAILED = 'failed';
}
