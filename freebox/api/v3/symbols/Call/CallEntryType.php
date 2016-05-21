<?php
namespace alphayax\freebox\api\v3\symbols\Call;

/**
 * Interface CallEntryType
 * @package alphayax\freebox\api\v3\symbols\Call
 * @see alphayax\freebox\api\v3\models\Call\CallEntry
 */
interface CallEntryType {

    /** Missed incoming call */
    const MISSED   = 'missed';

    /** Incoming call */
    const ACCEPTED = 'accepted';

    /** Outgoing call */
    const OUTGOING = 'outgoing';

}
