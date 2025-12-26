<?php

namespace PhonePe\SDK\common\config;

use PhonePe\SDK\Env;

class ConfigBuilder
{
    public static function getBaseUrl($env): string
    {
        switch ($env) {
            case Env::PRODUCTION:
                return Constants::BASE_URL_PROD;
            case Env::UAT:
                return Constants::BASE_URL_UAT;
            default:
                return Constants::BASE_URL_STAGE;
        }
    }

    public static function getEventUrl($env): string
    {
        switch ($env) {
            case Env::PRODUCTION:
                return Constants::BASE_URL_PROD;
            default:
                return Constants::BASE_URL_UAT;
        }
    }

}