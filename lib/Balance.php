<?php

namespace Stripe;

class Balance extends SingletonApiResource
{
    /**
     * @param string|null $apiKey
     *
     * @return Balance
     */
    public static function retrieve($apiKey = null)
    {
        return self::_singletonRetrieve($apiKey);
    }
}
