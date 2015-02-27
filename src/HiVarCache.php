<?php
/**
 * Created for the project "hivarCache"
 *
 * @author: Stanislav Semenov (CJP2600)
 * @email: cjp2600@ya.ru
 *
 * @date: 27.02.2015
 * @time: 17:53
 */


/**
 * Class HiVarCache
 */
class HiVarCache
{
    /**
     * @var
     */
    protected static $instance;
    /**
     * @var array
     */
    protected static $data = array();

    /**
     *
     */
    protected function __construct()
    {
    }

    /**
     * getInstance
     * @return HiVarCache
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * get
     * @param $key
     * @return null
     */
    public function get($key)
    {
        self::getInstance();

        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }

    /**
     * set
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        self::getInstance();
        self::$data[$key] = $value;
    }
}