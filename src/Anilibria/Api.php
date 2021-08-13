<?php

declare(strict_types=1);

namespace Astaroth\Anilibria;

use Astaroth\Anilibria\Exceptions\UnexpectedInternalServerErrorException;
use Astaroth\Anilibria\Exceptions\UnhandledException;
use Astaroth\Anilibria\Exceptions\UnknownParameterQueryException;

final class Api
{
    /**
     * api url
     */
    private const API = "https://api.anilibria.tv/v2/";

    /**
     * Request
     * @param string $method
     * @param array $params
     * @return array
     * @throws \Exception
     */
    public static function request(string $method, array $params): array
    {
        return self::call(sprintf("%s%s?%s",
            self::API,
            $method,
            http_build_query($params)
        ));
    }

    /**
     * @param string $url
     * @return array
     * @throws UnexpectedInternalServerErrorException
     * @throws UnhandledException
     * @throws UnknownParameterQueryException
     */
    private static function call(string $url): array
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $raw = curl_exec($ch);
        curl_close($ch);

        if ($data = @json_decode($raw, true)) {
            self::handlerError($data);
            return $data;
        }

        if ($data = @simplexml_load_string($raw)) {
            return (array)$data;
        }

        return [];
    }

    /**
     * Singleton
     */
    private function __construct(){}

    /**
     * Error handler
     * @throws UnexpectedInternalServerErrorException
     * @throws UnknownParameterQueryException
     * @throws UnhandledException
     */
    private static function handlerError(array $data): void
    {
        if (isset($data["error"])) {
            $code = $data["error"]["code"];
            $message = $data["error"]["message"];

            throw match ($code) {
                500 => new UnexpectedInternalServerErrorException($message, $code),
                404 => new UnknownParameterQueryException($message, $code),
                default => new UnhandledException($message, $code),
            };
        }
    }
}