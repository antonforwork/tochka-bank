<?php

namespace TochkaBank\Responses;

use LazyJsonMapper\LazyJsonMapper;

/**
 * OrganizationAccount.
 *
 * @method string getAccountCode()
 * @method string getBankCode()
 * @method string getCurrencyCode()
 * @method bool isAccountCode()
 * @method bool isBankCode()
 * @method bool isCurrencyCode()
 * @method $this setAccountCode(string $value)
 * @method $this setBankCode(string $value)
 * @method $this setCurrencyCode(string $value)
 * @method $this unsetAccountCode()
 * @method $this unsetBankCode()
 * @method $this unsetCurrencyCode()
 *
 * @property string $account_code
 * @property string $bank_code
 * @property string $currency_code
 */
class OrganizationAccount extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'account_code' => 'string',
        'bank_code' => 'string',
        'currency_code' => 'string',
    ];
}
