<?php
namespace alphayax\freebox\api\v3\symbols\RRD\Fields;

/**
 * Symbol Net
 * @package alphayax\freebox\api\v3\symbols\RRD\Fields
 */
interface Net {

    /** upload available bandwidth (in byte/s) */
    const UPLOAD_BANDWIDTH = 'bw_up';

    /** download available bandwidth (in byte/s) */
    const DOWNLOAD_BANDWIDTH = 'bw_down';

    /** upload rate (in byte/s) */
    const UPLOAD_RATE = 'rate_up';

    /** download rate (in byte/s) */
    const DOWNLOAD_RATE = 'rate_down';

    /** vpn client upload rate (in byte/s) */
    const VPN_DOWNLOAD_RATE = 'vpn_rate_up';

    /** vpn client download rate (in byte/s) */
    const VPN_UPLOAD_RATE = 'vpn_rate_down';
}
