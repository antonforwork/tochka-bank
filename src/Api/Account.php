<?php

namespace TochkaBank\Api;

use TochkaBank\Client;
use TochkaBank\Exceptions\InvalidJWTToken;
use TochkaBank\Responses\BankAccount;
use TochkaBank\Responses\Organization;
use TochkaBank\Responses\Organizations;

class Account
{

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }


    /**
     * Возвращает список доступных организаций
     *
     * @return Organization[]
     * @throws InvalidJWTToken
     */
    public function getOrganizations()
    {
        return (new Organizations($this->client->request('GET', '/organization/list')))->getOrganizations();
    }

    /**
     * Возвращает список доступных счетов
     *
     * @return BankAccount[]
     * @throws InvalidJWTToken
     */
    public function getAccounts()
    {
        $response = $this->client->request('GET', '/account/list');

        $return = [];
        foreach ($response as $account) {
            $return[] = new BankAccount($account);
        }
        return $return;
    }
}
