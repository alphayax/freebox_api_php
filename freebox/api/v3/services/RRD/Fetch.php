<?php
namespace alphayax\freebox\api\v3\services\RRD;
use alphayax\freebox\api\v3\Service;

/**
 * Class Fetch
 * @package alphayax\freebox\api\v3\services\RRD
 */
class Fetch extends Service {

    const API_RDD = '/api/v3/rrd/';

    /**
     * Return Freebox information & statistics
     * @param string $db
     *      Name of the rrd database to read
     *      @see alphayax\freebox\api\v3\symbols\RRD\Db
     * @param int    $date_start
     *      The requested start timestamp of the stats to get
     *      NOTE: this can be adjusted to fit the best available resolution
     * @param int    $date_end
     *      The requested end timestamp of the stats to get
     *      NOTE: this can be adjusted to fit the best available resolution
     * @param int    $precision
     *      By default all values are cast to int, if you need floating point precision you can provide a precision factor that will be applied to all values before being returned.
     *      For instance if you want 2 digit precision you should use a precision of 100, and divide the obtained results by 100.
     * @param array  $fields
     *      If you are only interested in getting some fields you can provide the list of fields you want to get.
     *      @see alphayax\freebox\api\v3\symbols\RRD\Fields\Net
     *      @see alphayax\freebox\api\v3\symbols\RRD\Fields\Temp
     *      @see alphayax\freebox\api\v3\symbols\RRD\Fields\Dsl
     *      @see alphayax\freebox\api\v3\symbols\RRD\Fields\FbxSwitch
     * @return array
     */
    public function getStats( $db, $date_start = null, $date_end = null, $precision = null, array $fields = []){
        $QueryParameters = $this->buildQuery( $db, $date_start, $date_end, $precision, $fields);
        $rest = $this->getAuthService( self::API_RDD);
        $rest->GET( $QueryParameters);

        return $rest->getResult();
    }

    /**
     * Build the query
     * @param string $db
     * @param int    $date_start
     * @param int    $date_end
     * @param int    $precision
     * @param array  $fields
     * @return array
     */
    protected function buildQuery( $db, $date_start, $date_end, $precision, array $fields){
        $QueryParameters = [
            'db' => $db,
        ];
        if( ! is_null( $date_start)){
            $QueryParameters['date_start'] = $date_start;
        }
        if( ! is_null( $date_end)){
            $QueryParameters['date_end'] = $date_end;
        }
        if( ! is_null( $precision)){
            $QueryParameters['precision'] = $precision;
        }
        if( ! empty( $fields)){
            $QueryParameters['fields'] = $fields;
        }
        return $QueryParameters;
    }

}
