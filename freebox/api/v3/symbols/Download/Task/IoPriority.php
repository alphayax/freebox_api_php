<?php
namespace alphayax\freebox\api\v3\symbols\Download\Task;

/**
 * Symbol IoPriority
 * @package alphayax\freebox\api\v3\symbols\Download\Task
 * @see alphayax\freebox\api\v3\models\Download\Task
 */
interface IoPriority {
    const LOW = 'low';
    const NORMAL = 'normal';
    const HIGH = 'high';
}
