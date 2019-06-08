<?php
namespace alphayax\freebox\api\v6\symbols\Node\Enpoint;

interface Visibility
{
    /** For internal use only, never exposed */
    const INTERNAL = 'internal';

    /** The endpoint is available for scenarii but does not display info to the user */
    const NORMAL = 'normal';

    /** The endpoint expose data that can be displayed on UI */
    const DASHBOARD = 'dashboard';
}
