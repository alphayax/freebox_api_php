<?php
namespace alphayax\freebox\api\v3\symbols\WiFi\APStatus;

/**
 * Symbol State
 * @package alphayax\freebox\api\v3\symbols\WiFi\APStatus
 * @see alphayax\freebox\api\v3\models\WiFi\AccessPoint\APStatus
 */
interface State {

    /** Ap is probing wifi channels */
    const SCANNING = 'scanning';

    /** Ap is not configured */
    const NO_PARAM = 'no_param';

    /** Ap has an invalid configuration */
    const BAD_PARAM = 'bad_param';

    /** Ap is permanently disabled */
    const DISABLED = 'disabled';

    /** Ap is currently disabled according to planning */
    const DISABLED_PLANNING = 'disabled_planning';

    /** Ap has no active BSS */
    const NO_ACTIVE_BSS = 'no_active_bss';

    /** Ap is starting */
    const STARTING = 'starting';

    /** Ap is selecting the best available channel */
    const ACS = 'acs';

    /** Ap is scanning for other access point */
    const HT_SCAN = 'ht_scan';

    /** Ap is performing dynamic frequency selection */
    const DFS = 'dfs';

    /** Ap is active */
    const ACTIVE = 'active';

    /** Ap has failed to start */
    const FAILED = 'failed';
}
