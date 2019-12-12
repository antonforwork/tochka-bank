<?php

namespace TochkaBank\Api;

use TochkaBank\Client;
use TochkaBank\Exceptions\InvalidJWTToken;
use TochkaBank\Responses\Statement\Request;
use TochkaBank\Responses\Statement\RequestId;
use TochkaBank\Responses\Statement\Status;

class Statement
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }


    /**
     * Делает запрос на создание выписки
     * Обратите внимание что Даты должны указываться как string в формате YYYY-MM-DD
     * Карбон специально не использовался дабы не тащить доп зависимости в пакет
     *
     * @param \TochkaBank\Requests\Statement\Request $request
     * @return RequestId
     * @throws InvalidJWTToken
     */
    public function create(\TochkaBank\Requests\Statement\Request $request)
    {
        $response = $this->client->request('POST', '/statement', $request->asArray());
        return new RequestId($response);
    }

    /**
     * Получает информацию про выписку
     * @param $requestId
     * @return Request
     * @throws InvalidJWTToken
     */
    public function get($requestId)
    {
        $response = $this->client->request('GET', '/statement/result/' . $requestId);
        return new Request($response);
    }

    /**
     * Запрос статуса запроса, локально кеширует результат на случай если в коде будет вызвано дважды
     * Если нужно формировать вызов используйте аргумент $forceRequest
     *
     * @param $requestId
     * @param $forceRequest
     * @return string
     * @throws InvalidJWTToken
     */
    public function getStatus($requestId, $forceRequest = false)
    {
        static $cache = [];
        if (isset($cache[$requestId]) && !$forceRequest) {
            return $cache[$requestId];
        }
        $response = $this->client->request('GET', '/statement/status/' . $requestId);
        $status = (new Status($response))->getStatus();
        $cache[$requestId] = $status;
        return $status;
    }
}
