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
 *
 * @method string name
 * @method string firstName
 * @method string firstNameMale
 * @method string firstNameFemale
 * @method string lastName
 * @method string title
 * @method string titleMale
 * @method string titleFemale
 * @method string citySuffix
 * @method string streetSuffix
 * @method string buildingNumber
 * @method string city
 * @method string streetName
 * @method string streetAddress
 * @method string postcode
 * @method string address
 * @method string country
 * @method float  latitude
 * @method float  longitude
 * @method string ean13
 * @method string ean8
 * @method string isbn13
 * @method string isbn10
 * @method string phoneNumber
 * @method string company
 * @method string companySuffix
 * @method string jobTitle
 * @method string creditCardType
 * @method string creditCardNumber($type = null, $formatted = false, $separator = '-')
 * @method \DateTime $creditCardExpirationDate
 * @method string creditCardExpirationDateString
 * @method string creditCardDetails
 * @method string bankAccountNumber
 * @method string iban($countryCode = null, $prefix = '', $length = null)
 * @method string swiftBicNumber
 * @method string vat
 * @method string word
 * @method string|array words($nb = 3, $asText = false)
 * @method string sentence($nbWords = 6, $variableNbWords = true)
 * @method string|array sentences($nb = 3, $asText = false)
 * @method string paragraph($nbSentences = 3, $variableNbSentences = true)
 * @method string|array paragraphs($nb = 3, $asText = false)
 * @method string text($maxNbChars = 200)
 * @method string realText($maxNbChars = 200, $indexSize = 2)
 * @method string email
 * @method string safeEmail
 * @method string freeEmail
 * @method string companyEmail
 * @method string freeEmailDomain
 * @method string safeEmailDomain
 * @method string userName
 * @method string password($minLength = 6, $maxLength = 20)
 * @method string domainName
 * @method string domainWord
 * @method string tld
 * @method string url
 * @method string slug($nbWords = 6, $variableNbWords = true)
 * @method string ipv4
 * @method string ipv6
 * @method string localIpv4
 * @method string macAddress
 * @method int       unixTime
 * @method \DateTime dateTime
 * @method \DateTime dateTimeAD
 * @method string    iso8601
 * @method \DateTime dateTimeThisCentury
 * @method \DateTime dateTimeThisDecade
 * @method \DateTime dateTimeThisYear
 * @method \DateTime dateTimeThisMonth
 * @method string    amPm
 * @method int       dayOfMonth
 * @method int       dayOfWeek
 * @method int       month
 * @method string    monthName
 * @method int       year
 * @method int       century
 * @method string    timezone
 * @method string date($format = 'Y-m-d', $max = 'now')
 * @method string time($format = 'H:i:s', $max = 'now')
 * @method \DateTime dateTimeBetween($startDate = '-30 years', $endDate = 'now')
 * @method \DateTime dateTimeInInterval($date = '-30 years', $interval = '+5 days', $timezone = null)
 * @method string md5
 * @method string sha1
 * @method string sha256
 * @method string locale
 * @method string countryCode
 * @method string countryISOAlpha3
 * @method string languageCode
 * @method string currencyCode
 * @method bool boolean($chanceOfGettingTrue = 50)
 * @method int    randomDigit
 * @method int    randomDigitNotNull
 * @method string randomLetter
 * @method string randomAscii
 * @method int randomNumber($nbDigits = null, $strict = false)
 * @method int|string|null randomKey(array $array = array())
 * @method int numberBetween($min = 0, $max = 2147483647)
 * @method float randomFloat($nbMaxDecimals = null, $min = 0, $max = null)
 * @method mixed randomElement(array $array = array('a', 'b', 'c'))
 * @method array randomElements(array $array = array('a', 'b', 'c'), $count = 1)
 * @method array|string shuffle($arg = '')
 * @method array shuffleArray(array $array = array())
 * @method string shuffleString($string = '', $encoding = 'UTF-8')
 * @method string numerify($string = '###')
 * @method string lexify($string = '????')
 * @method string bothify($string = '## ??')
 * @method string asciify($string = '****')
 * @method string regexify($regex = '')
 * @method string toLower($string = '')
 * @method string toUpper($string = '')
 * @method int biasedNumberBetween($min = 0, $max = 100, $function = 'sqrt')
 * @method string macProcessor
 * @method string linuxProcessor
 * @method string userAgent
 * @method string chrome
 * @method string firefox
 * @method string safari
 * @method string opera
 * @method string internetExplorer
 * @method string windowsPlatformToken
 * @method string macPlatformToken
 * @method string linuxPlatformToken
 * @method string uuid
 * @method string mimeType
 * @method string fileExtension
 * @method string file($sourceDirectory = '/tmp', $targetDirectory = '/tmp', $fullPath = true)
 * @method string imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
 * @method string image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null)
 * @method string hexColor
 * @method string safeHexColor
 * @method string rgbColor
 * @method array rgbColorAsArray
 * @method string rgbCssColor
 * @method string safeColorName
 * @method string colorName
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
