# Tochka Bank
Библиотека представляет собой оберку вокруг Tochka Bank API

![compatible](https://img.shields.io/badge/PHP%207-Compatible-brightgreen.svg)


## Установка ##
```sh
composer require antonforwork/tochka-bank
```

## Использование ##
Для работы нужно получить JWT токен, подробности можно [прочитать на сайте банка](https://enter.tochka.com/doc/v1/auth.html#jwt)

### Инициализация клиента ###
```php
use TochkaBank\Client;

$client = new Client('jwt-token-here', [
    'debug' => false, // Доп опции для Guzzle
]);

``` 

### Получение списка всех организаций ###
```php
$organizations = $client->account->getOrganizations();
foreach ($organizations as $organization) {
    echo $organization->getFullName() . PHP_EOL;
    $accounts = $organization->getAccounts();
    foreach ($accounts as $account) {
        echo $account->getAccountCode() . ' / ' . $account->get$account->getCurrencyCode() . PHP_EOL;
    }
    echo PHP_EOL;
}
```

### Получение списка всех счетов ###
```php
$accounts = $client->account->getAccounts();
foreach ($accounts as $account) {
    echo $account->getCode() . "\t" . $account->getBankCode() . PHP_EOL;
}
```

### Создание запроса на выписку ###
```php
$request = new \TochkaBank\Requests\Statement\Request();
$request->setAccountCode(''); // Номер счета
$request->setBankCode(''); // Номер банка (см. банк счета)
$request->setDateStart('ГГГГ-ММ-ДД');
$request->setDateEnd('ГГГГ-ММ-ДД');

$statementRequest = $client->statement->create($request);
echo $statementRequest->getRequestId();
```

### Получение статуса запроса выписки ###
```php
 /* Обратите внимание, что результат запроса кешируется локально, если вызвать дважды вернется один результат
  * Если нужно форсировать запрос используйте второй аргументом `true`
  */
 echo $client->statement->getStatus($requestId);
```

### Получение выписки ###
```php
use TochkaBank\Responses\Statement\Status;

echo $client->statement->getStatus($requestId);

if ($client->statement->getStatus($requestId) == Status::STATUS_READY) {
    $request = $client->statement->get($requestId);
    foreach ($request->getPayments() as $payment) {
        // другие доступные методы смотрите в Payment классе
        echo $payment->getPaymentDate() . ', amount: ' . $payment->getPaymentAmount() . PHP_EOL;
    }
    echo '---';
    echo 'at start: ' . $request->getBalanceOpening() . ', at end: ' . $request->getBalanceClosing();
};
```
