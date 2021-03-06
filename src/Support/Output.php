<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace FastD\Swoole\Support;


class Output
{
    public static $output;

    /**
     * @return \FastD\Console\Output\Output
     */
    public static function getInstance()
    {
        if (null === static::$output) {
            static::$output = new \FastD\Console\Output\Output();
        }

        return static::$output;
    }

    public static function output($message)
    {
        static::getInstance()->writeln($message);
    }

    public static function table(array $keys, array $columns)
    {
        static::getInstance()->table($keys, $columns);
    }
}