<?php

namespace TochkaBank\Responses\Statement;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Payment.
 *
 * @method string getCounterpartyAccountNumber()
 * @method string getCounterpartyBankBic()
 * @method string getCounterpartyBankName()
 * @method string getCounterpartyInn()
 * @method string getCounterpartyKpp()
 * @method string getCounterpartyName()
 * @method string getOperationType()
 * @method string getPaymentAmount()
 * @method string getPaymentBankSystemId()
 * @method string getPaymentChargeDate()
 * @method string getPaymentDate()
 * @method string getPaymentNumber()
 * @method string getPaymentPurpose()
 * @method string getSupplierBillId()
 * @method string getTaxInfoDocumentDate()
 * @method string getTaxInfoDocumentNumber()
 * @method string getTaxInfoKbk()
 * @method string getTaxInfoOkato()
 * @method string getTaxInfoPeriod()
 * @method string getTaxInfoReasonCode()
 * @method string getTaxInfoStatus()
 * @method string getXPaymentId()
 * @method bool isCounterpartyAccountNumber()
 * @method bool isCounterpartyBankBic()
 * @method bool isCounterpartyBankName()
 * @method bool isCounterpartyInn()
 * @method bool isCounterpartyKpp()
 * @method bool isCounterpartyName()
 * @method bool isOperationType()
 * @method bool isPaymentAmount()
 * @method bool isPaymentBankSystemId()
 * @method bool isPaymentChargeDate()
 * @method bool isPaymentDate()
 * @method bool isPaymentNumber()
 * @method bool isPaymentPurpose()
 * @method bool isSupplierBillId()
 * @method bool isTaxInfoDocumentDate()
 * @method bool isTaxInfoDocumentNumber()
 * @method bool isTaxInfoKbk()
 * @method bool isTaxInfoOkato()
 * @method bool isTaxInfoPeriod()
 * @method bool isTaxInfoReasonCode()
 * @method bool isTaxInfoStatus()
 * @method bool isXPaymentId()
 * @method $this setCounterpartyAccountNumber(string $value)
 * @method $this setCounterpartyBankBic(string $value)
 * @method $this setCounterpartyBankName(string $value)
 * @method $this setCounterpartyInn(string $value)
 * @method $this setCounterpartyKpp(string $value)
 * @method $this setCounterpartyName(string $value)
 * @method $this setOperationType(string $value)
 * @method $this setPaymentAmount(string $value)
 * @method $this setPaymentBankSystemId(string $value)
 * @method $this setPaymentChargeDate(string $value)
 * @method $this setPaymentDate(string $value)
 * @method $this setPaymentNumber(string $value)
 * @method $this setPaymentPurpose(string $value)
 * @method $this setSupplierBillId(string $value)
 * @method $this setTaxInfoDocumentDate(string $value)
 * @method $this setTaxInfoDocumentNumber(string $value)
 * @method $this setTaxInfoKbk(string $value)
 * @method $this setTaxInfoOkato(string $value)
 * @method $this setTaxInfoPeriod(string $value)
 * @method $this setTaxInfoReasonCode(string $value)
 * @method $this setTaxInfoStatus(string $value)
 * @method $this setXPaymentId(string $value)
 * @method $this unsetCounterpartyAccountNumber()
 * @method $this unsetCounterpartyBankBic()
 * @method $this unsetCounterpartyBankName()
 * @method $this unsetCounterpartyInn()
 * @method $this unsetCounterpartyKpp()
 * @method $this unsetCounterpartyName()
 * @method $this unsetOperationType()
 * @method $this unsetPaymentAmount()
 * @method $this unsetPaymentBankSystemId()
 * @method $this unsetPaymentChargeDate()
 * @method $this unsetPaymentDate()
 * @method $this unsetPaymentNumber()
 * @method $this unsetPaymentPurpose()
 * @method $this unsetSupplierBillId()
 * @method $this unsetTaxInfoDocumentDate()
 * @method $this unsetTaxInfoDocumentNumber()
 * @method $this unsetTaxInfoKbk()
 * @method $this unsetTaxInfoOkato()
 * @method $this unsetTaxInfoPeriod()
 * @method $this unsetTaxInfoReasonCode()
 * @method $this unsetTaxInfoStatus()
 * @method $this unsetXPaymentId()
 *
 * @property string $counterparty_account_number
 * @property string $counterparty_bank_bic
 * @property string $counterparty_bank_name
 * @property string $counterparty_inn
 * @property string $counterparty_kpp
 * @property string $counterparty_name
 * @property string $operation_type
 * @property string $payment_amount
 * @property string $payment_bank_system_id
 * @property string $payment_charge_date
 * @property string $payment_date
 * @property string $payment_number
 * @property string $payment_purpose
 * @property string $supplier_bill_id
 * @property string $tax_info_document_date
 * @property string $tax_info_document_number
 * @property string $tax_info_kbk
 * @property string $tax_info_okato
 * @property string $tax_info_period
 * @property string $tax_info_reason_code
 * @property string $tax_info_status
 * @property string $x_payment_id
 */
class Payment extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'counterparty_account_number' => 'string',
        'counterparty_bank_bic' => 'string',
        'counterparty_bank_name' => 'string',
        'counterparty_inn' => 'string',
        'counterparty_kpp' => 'string',
        'counterparty_name' => 'string',
        'operation_type' => 'string',
        'payment_amount' => 'string',
        'payment_bank_system_id' => 'string',
        'payment_charge_date' => 'string',
        'payment_date' => 'string',
        'payment_number' => 'string',
        'payment_purpose' => 'string',
        'supplier_bill_id' => 'string',
        'tax_info_document_date' => 'string',
        'tax_info_document_number' => 'string',
        'tax_info_kbk' => 'string',
        'tax_info_okato' => 'string',
        'tax_info_period' => 'string',
        'tax_info_reason_code' => 'string',
        'tax_info_status' => 'string',
        'x_payment_id' => 'string',
    ];
}
