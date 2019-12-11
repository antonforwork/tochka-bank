<?php

namespace TochkaBank\Responses;

use LazyJsonMapper\LazyJsonMapper;

/**
 * BankAccount.
 *
 * @method string getBankCode()
 * @method string getCode()
 * @method bool isBankCode()
 * @method bool isCode()
 * @method $this setBankCode(string $value)
 * @method $this setCode(string $value)
 * @method $this unsetBankCode()
 * @method $this unsetCode()
 *
 * @property string $bank_code
 * @property string $code
 */
class BankAccount extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'bank_code' => 'string',
        'code' => 'string',
    ];
}
