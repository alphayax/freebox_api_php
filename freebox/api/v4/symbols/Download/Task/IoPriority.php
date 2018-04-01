<?php

namespace alphayax\freebox\api\v4\symbols\Download\Task;

/**
 * Symbol IoPriority
 * @package alphayax\freebox\api\v4\symbols\Download\Task
 * @see     \alphayax\freebox\api\v4\models\Download\Task
 */
interface IoPriority
{
    const LOW    = 'low';
    const NORMAL = 'normal';
    const HIGH   = 'high';
}
