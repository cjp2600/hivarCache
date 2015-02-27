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
    protected $instance;
    /**
     * @var array
     */
    protected $data = array();

    /**
     *
     */
    protected function __construct()
    {
    }

    /**
     * getInstance
     * @return mixed
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * __get
     * @param $key
     * @return null
     */
    public function __get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    /**
     * __set
     * @param $key
     * @param $value
     */
    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }
}