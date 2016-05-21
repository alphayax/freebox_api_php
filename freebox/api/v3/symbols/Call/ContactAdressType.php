<?php
namespace alphayax\freebox\api\v3\symbols\Call;

/**
 * Symbol ContactAdressType
 * @package alphayax\freebox\api\v3\symbols\Call
 * @see alphayax\freebox\api\v3\models\Call\ContactAddress
 */
interface ContactAdressType {

    /** home address */
    const HOME  = 'home';

    /** work address */
    const WORK  = 'work';

    /** other */
    const OTHER = 'other';

}
