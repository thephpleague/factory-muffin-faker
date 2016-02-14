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

use Faker\Factory;

/**
 * This is the faker class.
 *
 * This class is not intended to be used directly, but should be used through
 * the provided facade. The only time where you should be directly calling
 * methods here should be when you're using method chaining after initially
 * using the facade.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class Faker
{
    /**
     * The generator instance.
     *
     * @var \Faker\Generator
     */
    private $generator;

    /**
     * The faker localization.
     *
     * @var string
     */
    private $locale = 'en_EN';

    /**
     * Create a new faker instance.
     *
     * @param \Faker\Generator|null $generator The generator instance.
     *
     * @return void
     */
    public function __construct($generator = null)
    {
        $this->generator = $generator;
    }

    /**
     * Set the locale.
     *
     * @param string $local The locale.
     *
     * @return \League\FactoryMuffin\Faker\Faker
     */
    public function setLocale($local)
    {
        $this->locale = $local;

        $this->generator = null;

        return $this;
    }

    /**
     * Get the generator instance.
     *
     * @return \Faker\Generator
     */
    public function getGenerator()
    {
        if (!$this->generator) {
            $this->generator = Factory::create($this->locale);
        }

        return $this->generator;
    }

    /**
     * Add a provider.
     *
     * @param \Faker\Provider\Base $provider The provider instance.
     *
     * @return \League\FactoryMuffin\Faker\Faker
     */
    public function addProvider($provider)
    {
        $this->getGenerator()->addProvider($provider);

        return $this;
    }

    /**
     * Get the providers.
     *
     * @return \Faker\Provider\Base[]
     */
    public function getProviders()
    {
        return $this->getGenerator()->getProviders();
    }

    /**
     * Wrap a faker format in a closure.
     *
     * @param string $formatter The formatter.
     * @param array  $arguments The arguments.
     *
     * @return \Closure
     */
    public function format($formatter, array $arguments = [])
    {
        $generator = $this->getGenerator();

        return function () use ($generator, $formatter, $arguments) {
            return $generator->format($formatter, $arguments);
        };
    }

    /**
     * Get a formatter.
     *
     * @param string $formatter The formatter.
     *
     * @return \Closure
     */
    public function getFormatter($formatter)
    {
        return $this->getGenerator()->getFormatter($formatter);
    }

    /**
     * Make the generated item unique.
     *
     * @param bool $reset      Should we reset the unique tracker?
     * @param int  $maxRetries How many times should we retry?
     *
     * @return \League\FactoryMuffin\Faker\Faker
     */
    public function unique($reset = false, $maxRetries = 10000)
    {
        return new static($this->getGenerator()->unique($reset, $maxRetries));
    }

    /**
     * Make the generated item optional.
     *
     * @param float $weight  The probability of not receiving the default value.
     * @param mixed $default The default item.
     *
     * @return \League\FactoryMuffin\Faker\Faker
     */
    public function optional($weight = 0.5, $default = null)
    {
        return new static($this->getGenerator()->optional($weight, $default));
    }

    /**
     * Dynamically wrap faker method calls in closures.
     *
     * @param string $method    The method name.
     * @param array  $arguments The arguments.
     *
     * @return \Closure
     */
    public function __call($method, $arguments)
    {
        return $this->format($method, $arguments);
    }
}
