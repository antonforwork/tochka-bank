<?php

namespace TochkaBank\Responses\Statement;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Status.
 *
 * @method string getStatus()
 * @method bool isStatus()
 * @method $this setStatus(string $value)
 * @method $this unsetStatus()
 *
 * @property string $status
 */
class Status extends LazyJsonMapper
{

    const STATUS_QUEUE = 'queued';
    const STATUS_READY = 'ready';

    const JSON_PROPERTY_MAP = [
        'status' => 'string',
    ];
}
