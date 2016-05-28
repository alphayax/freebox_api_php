<?php
namespace alphayax\freebox\api\v3\symbols\RRD\Fields;

/**
 * Symbol Dsl
 * @package alphayax\freebox\api\v3\symbols\RRD\Fields
 */
interface Dsl {

    /** dsl available upload bandwidth (in byte/s) */
    const UPLOAD_BANDWIDTH_AVAILABLE = 'rate_up';

    /** dsl available download bandwidth (in byte/s) */
    const DOWNLOAD_BANDWIDTH_AVAILABLE = 'rate_down';

    /** dsl upload signal/noise ratio (in 1/10 dB) */
    const UPLOAD_NOISE_RATIO = 'snr_up';

    /** dsl download signal/noise ratio (in 1/10 dB) */
    const DOWNLOAD_NOISE_RATIO = 'snr_down';
}
