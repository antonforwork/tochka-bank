<?php

namespace TochkaBank\Responses;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Organization.
 *
 * @method OrganizationAccount[] getAccounts()
 * @method string getCustomerCode()
 * @method string getFullName()
 * @method string getTaxCode()
 * @method bool isAccounts()
 * @method bool isCustomerCode()
 * @method bool isFullName()
 * @method bool isTaxCode()
 * @method $this setAccounts(OrganizationAccount[] $value)
 * @method $this setCustomerCode(string $value)
 * @method $this setFullName(string $value)
 * @method $this setTaxCode(string $value)
 * @method $this unsetAccounts()
 * @method $this unsetCustomerCode()
 * @method $this unsetFullName()
 * @method $this unsetTaxCode()
 *
 * @property OrganizationAccount[] $accounts
 * @property string $customer_code
 * @property string $full_name
 * @property string $tax_code
 */
class Organization extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'customer_code' => 'string',
        'full_name' => 'string',
        'tax_code' => 'string',
        'accounts' => 'OrganizationAccount[]'
    ];
}
