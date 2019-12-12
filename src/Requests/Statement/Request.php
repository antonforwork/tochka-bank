<?php

namespace TochkaBank\Requests\Statement;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Request.
 *
 * @method string getAccountCode()
 * @method string getBankCode()
 * @method string getDateEnd()
 * @method string getDateStart()
 * @method bool isAccountCode()
 * @method bool isBankCode()
 * @method bool isDateEnd()
 * @method bool isDateStart()
 * @method $this setAccountCode(string $value)
 * @method $this setBankCode(string $value)
 * @method $this setDateEnd(string $value)
 * @method $this setDateStart(string $value)
 * @method $this unsetAccountCode()
 * @method $this unsetBankCode()
 * @method $this unsetDateEnd()
 * @method $this unsetDateStart()
 *
 * @property string $account_code
 * @property string $bank_code
 * @property string $date_end
 * @property string $date_start
 */
class Request extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'account_code' => 'string',
        'bank_code' => 'string',
        'date_start' => 'string',
        'date_end' => 'string',
    ];
}
