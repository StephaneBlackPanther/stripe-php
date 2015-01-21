<?php

namespace Stripe;

abstract class SingletonApiResource extends ApiResource
{
    protected static function _singletonRetrieve($apiKey = null)
    {
        $instance = new static(null, $apiKey);
        $instance->refresh();
        return $instance;
    }

    /**
     * @return string The endpoint associated with this singleton class.
     */
    public static function classUrl()
    {
        $base = static::className();
        return "/v1/${base}";
    }

    /**
     * @return string The endpoint associated with this singleton API resource.
     */
    public function instanceUrl()
    {
        return static::classUrl();
    }
}
