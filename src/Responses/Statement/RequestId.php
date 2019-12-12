<?php

namespace TochkaBank\Responses\Statement;

use LazyJsonMapper\LazyJsonMapper;

/**
 * RequestId.
 *
 * @method string getRequestId()
 * @method bool isRequestId()
 * @method $this setRequestId(string $value)
 * @method $this unsetRequestId()
 *
 * @property string $request_id
 */
class RequestId extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'request_id' => 'string',
    ];
}
