<?php
namespace alphayax\freebox\api\v3\symbols\Call;

/**
 * Symbol ContactEmailType
 * @package alphayax\freebox\api\v3\symbols\Call
 * @see alphayax\freebox\api\v3\models\Call\ContactEmail
 */
interface ContactEmailType {

    /** home address */
    const HOME  = 'home';

    /** work address */
    const WORK  = 'work';

    /** other */
    const OTHER = 'other';

}
