<?php

namespace App\Http\Clients;

use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Http;

/**
 * @author Mohammed Mudassir <hello@mudasir.me>
 */
class TodoApiClient
{
    /** @todo this can be extracted to its config file. */
    const URL = 'https://api.fake.rest/023bfdad-2152-4906-a458-30248dc84f0f/todos';

    /**
     * @param Http $http
     */
    public function __construct(protected Http $http)
    {
    }

    /**
     * Get the list of all todos
     *
     * @return array
     */
    public function get(): array
    {
        /** @var Response $response */
        $response = $this->http::get(self::URL);

        return json_decode($response->getBody()->getContents(), true)['results'];
    }
}
