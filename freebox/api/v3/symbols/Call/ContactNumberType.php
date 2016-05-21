<?php
namespace alphayax\freebox\api\v3\symbols\Call;

/**
 * Symbol ContactNumberType
 * @package alphayax\freebox\api\v3\symbols\Call
 * @see alphayax\freebox\api\v3\models\Call\ContactNumber
 */
interface ContactNumberType {

    /** home address */
    const HOME  = 'fixed';

    /** fixed phone */
    const FIXED  = 'fixed';

    /** mobile phone */
    const MOBILE  = 'mobile';

    /** fax */
    const FAX  = 'fax';

    /** work address */
    const WORK  = 'work';

    /** other */
    const OTHER = 'other';

}
