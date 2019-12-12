<?php

namespace TochkaBank\Responses\Statement;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Request.
 *
 * @method string getBalanceClosing()
 * @method string getBalanceOpening()
 * @method Payment[] getPayments()
 * @method bool isBalanceClosing()
 * @method bool isBalanceOpening()
 * @method bool isPayments()
 * @method $this setBalanceClosing(string $value)
 * @method $this setBalanceOpening(string $value)
 * @method $this setPayments(Payment[] $value)
 * @method $this unsetBalanceClosing()
 * @method $this unsetBalanceOpening()
 * @method $this unsetPayments()
 *
 * @property string $balance_closing
 * @property string $balance_opening
 * @property Payment[] $payments
 */
class Request extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'balance_opening' => 'string',
        'balance_closing' => 'string',
        'payments' => 'Payment[]',
    ];
}
