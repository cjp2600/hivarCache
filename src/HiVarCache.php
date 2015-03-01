<?php

/**
 * Class HiVarCache
 */
class HiVarCache {

    /**
     * Cached objects
     * @static array
     */
    private static $cache = array();

    /**
     * set
     * @param $key
     * @param $value
     */
    public static function set($key,$value)
    {
        static::$cache[$key] = $value;
    }

    /**
     * Get the cached value
     * @param $key
     * @return mixed Cached value
     */
    public static function get($key)
    {
        if (  isset(static::$cache[$key] ) ) {
            return static::$cache[$key];
        }
        return false;
    }

}