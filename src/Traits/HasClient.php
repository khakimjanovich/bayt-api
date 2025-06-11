<?php

namespace Khakimjanovich\Bayt\Traits;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\PendingRequest;
use Khakimjanovich\Bayt\Enums\ExceptionCodes;
use Khakimjanovich\Bayt\Exceptions\BaytException;

trait HasClient
{
    public function __construct(
        private readonly PendingRequest $pending_request
    ) {}

    /**
     * @throws BaytException
     */
    public function post(string $route): array
    {
        try {
            $response = $this->pending_request->post($route);

        } catch (ConnectionException $exception) {
            throw new BaytException(ExceptionCodes::CONNECTION_EXCEPTION, $exception);
        }

        if (! $response->successful()) {
            throw new BaytException(ExceptionCodes::RESPONSE_IS_NOT_SUCCESSFUL);
        }

        $data = json_decode($response->body(), associative: true, flags: JSON_BIGINT_AS_STRING);

        if (! is_array($data)) {
            throw new BaytException(ExceptionCodes::RESPONSE_DOES_NOT_CONTAIN_PROPER_BODY);
        }

        return $data;
    }

    /**
     * @throws BaytException
     */
    public function get(string $route): array
    {
        try {
            $response = $this->pending_request->get($route);

        } catch (ConnectionException $exception) {
            throw new BaytException(ExceptionCodes::CONNECTION_EXCEPTION, $exception);
        }

        if (! $response->successful()) {
            throw new BaytException(ExceptionCodes::RESPONSE_IS_NOT_SUCCESSFUL);
        }

        $data = json_decode($response->body(), associative: true, flags: JSON_BIGINT_AS_STRING);

        if (! is_array($data)) {
            throw new BaytException(ExceptionCodes::RESPONSE_DOES_NOT_CONTAIN_PROPER_BODY);
        }

        return $data;
    }
}
