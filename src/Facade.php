<?php

/*
 * This file is part of Factory Muffin Faker.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\FactoryMuffin\Faker;

/**
 * This is the faker facade class.
 *
 * This class dynamically proxies static method calls to the underlying faker.
 *
 * @see League\FactoryMuffin\Faker\Faker
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class Facade
{
    /**
     * The underlying faker instance.
     *
     * @var \League\FactoryMuffin\Faker\Faker
     */
    private static $instance;

    /**
     * Get the underlying faker instance.
     *
     * We'll always cache the instance and reuse it.
     *
     * @return \League\FactoryMuffin\Faker\Faker
     */
    public static function instance()
    {
        if (!self::$instance) {
            self::$instance = new Faker();
        }

        return self::$instance;
    }

    /**
     * Reset the underlying faker instance.
     *
     * @return \League\FactoryMuffin\Faker\Faker
     */
    public static function reset()
    {
        self::$instance = null;

        return self::instance();
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @codeCoverageIgnore
     *
     * @param string $method    The method name.
     * @param array  $arguments The arguments.
     *
     * @return mixed
     */
    public static function __callStatic($method, $arguments)
    {
        switch (count($arguments)) {
            case 0:
                return self::instance()->$method();
            case 1:
                return self::instance()->$method($arguments[0]);
            case 2:
                return self::instance()->$method($arguments[0], $arguments[1]);
            case 3:
                return self::instance()->$method($arguments[0], $arguments[1], $arguments[2]);
            default:
                return call_user_func_array([self::instance(), $method], $arguments);
        }
    }
}
