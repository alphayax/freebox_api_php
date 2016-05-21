<?php
namespace alphayax\freebox\api\v3\symbols\Call;

/**
 * Symbol ContactUrlType
 * @package alphayax\freebox\api\v3\symbols\Call
 * @see alphayax\freebox\api\v3\models\Call\ContactUrl
 */
interface ContactUrlType {

    /** profile address */
    const PROFILE  = 'profile';

    /** blog address */
    const BLOG  = 'blog';

    /** site adress */
    const SITE  = 'site';

    /** other */
    const OTHER = 'other';

}
