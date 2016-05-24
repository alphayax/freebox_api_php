<?php
namespace alphayax\freebox\api\v3\symbols\Download\Task;

/**
 * Symbol Type
 * @package alphayax\freebox\api\v3\symbols\Download\Task
 * @see alphayax\freebox\api\v3\models\Download\Task
 */
interface Type {

    /** bittorrent download */
    const BITTORENT = 'bt';

    /** newsgroup download */
    const NEWSGROUP = 'nzb';

    /** HTTP download */
    const HTTP = 'http';

    /** FTP download */
    const FTP = 'ftp';
}