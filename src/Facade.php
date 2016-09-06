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
 * @mixin \Faker\Provider\Address
 * @mixin \Faker\Provider\Barcode
 * @mixin \Faker\Provider\Base
 * @mixin \Faker\Provider\Biased
 * @mixin \Faker\Provider\Color
 * @mixin \Faker\Provider\Company
 * @mixin \Faker\Provider\DateTime
 * @mixin \Faker\Provider\File
 * @mixin \Faker\Provider\Image
 * @mixin \Faker\Provider\Internet
 * @mixin \Faker\Provider\Lorem
 * @mixin \Faker\Provider\Miscellaneous
 * @mixin \Faker\Provider\Payment
 * @mixin \Faker\Provider\Person
 * @mixin \Faker\Provider\PhoneNumber
 * @mixin \Faker\Provider\Text
 * @mixin \Faker\Provider\UserAgent
 * @mixin \Faker\Provider\Uuid
 *
 * @author Graham Campbell <graham@alt-three.com>
 *
 * @method static string name
 * @method static string firstName
 * @method static string firstNameMale
 * @method static string firstNameFemale
 * @method static string lastName
 * @method static string title
 * @method static string titleMale
 * @method static string titleFemale
 * @method static string citySuffix
 * @method static string streetSuffix
 * @method static string buildingNumber
 * @method static string city
 * @method static string streetName
 * @method static string streetAddress
 * @method static string postcode
 * @method static string address
 * @method static string country
 * @method static float  latitude
 * @method static float  longitude
 * @method static string ean13
 * @method static string ean8
 * @method static string isbn13
 * @method static string isbn10
 * @method static string phoneNumber
 * @method static string company
 * @method static string companySuffix
 * @method static string jobTitle
 * @method static string creditCardType
 * @method static string creditCardNumber($type = null, $formatted = false, $separator = '-')
 * @method static \DateTime $creditCardExpirationDate
 * @method static string creditCardExpirationDateString
 * @method static string creditCardDetails
 * @method static string bankAccountNumber
 * @method static string iban($countryCode = null, $prefix = '', $length = null)
 * @method static string swiftBicNumber
 * @method static string vat
 * @method static string word
 * @method static string|array words($nb = 3, $asText = false)
 * @method static string sentence($nbWords = 6, $variableNbWords = true)
 * @method static string|array sentences($nb = 3, $asText = false)
 * @method static string paragraph($nbSentences = 3, $variableNbSentences = true)
 * @method static string|array paragraphs($nb = 3, $asText = false)
 * @method static string text($maxNbChars = 200)
 * @method static string realText($maxNbChars = 200, $indexSize = 2)
 * @method static string email
 * @method static string safeEmail
 * @method static string freeEmail
 * @method static string companyEmail
 * @method static string freeEmailDomain
 * @method static string safeEmailDomain
 * @method static string userName
 * @method static string password($minLength = 6, $maxLength = 20)
 * @method static string domainName
 * @method static string domainWord
 * @method static string tld
 * @method static string url
 * @method static string slug($nbWords = 6, $variableNbWords = true)
 * @method static string ipv4
 * @method static string ipv6
 * @method static string localIpv4
 * @method static string macAddress
 * @method static int       unixTime
 * @method static \DateTime dateTime
 * @method static \DateTime dateTimeAD
 * @method static string    iso8601
 * @method static \DateTime dateTimeThisCentury
 * @method static \DateTime dateTimeThisDecade
 * @method static \DateTime dateTimeThisYear
 * @method static \DateTime dateTimeThisMonth
 * @method static string    amPm
 * @method static int       dayOfMonth
 * @method static int       dayOfWeek
 * @method static int       month
 * @method static string    monthName
 * @method static int       year
 * @method static int       century
 * @method static string    timezone
 * @method static string date($format = 'Y-m-d', $max = 'now')
 * @method static string time($format = 'H:i:s', $max = 'now')
 * @method static \DateTime dateTimeBetween($startDate = '-30 years', $endDate = 'now')
 * @method static \DateTime dateTimeInInterval($date = '-30 years', $interval = '+5 days', $timezone = null)
 * @method static string md5
 * @method static string sha1
 * @method static string sha256
 * @method static string locale
 * @method static string countryCode
 * @method static string countryISOAlpha3
 * @method static string languageCode
 * @method static string currencyCode
 * @method static bool boolean($chanceOfGettingTrue = 50)
 * @method static int    randomDigit
 * @method static int    randomDigitNotNull
 * @method static string randomLetter
 * @method static string randomAscii
 * @method static int randomNumber($nbDigits = null, $strict = false)
 * @method static int|string|null randomKey(array $array = array())
 * @method static int numberBetween($min = 0, $max = 2147483647)
 * @method static float randomFloat($nbMaxDecimals = null, $min = 0, $max = null)
 * @method static mixed randomElement(array $array = array('a', 'b', 'c'))
 * @method static array randomElements(array $array = array('a', 'b', 'c'), $count = 1)
 * @method static array|string shuffle($arg = '')
 * @method static array shuffleArray(array $array = array())
 * @method static string shuffleString($string = '', $encoding = 'UTF-8')
 * @method static string numerify($string = '###')
 * @method static string lexify($string = '????')
 * @method static string bothify($string = '## ??')
 * @method static string asciify($string = '****')
 * @method static string regexify($regex = '')
 * @method static string toLower($string = '')
 * @method static string toUpper($string = '')
 * @method static int biasedNumberBetween($min = 0, $max = 100, $function = 'sqrt')
 * @method static string macProcessor
 * @method static string linuxProcessor
 * @method static string userAgent
 * @method static string chrome
 * @method static string firefox
 * @method static string safari
 * @method static string opera
 * @method static string internetExplorer
 * @method static string windowsPlatformToken
 * @method static string macPlatformToken
 * @method static string linuxPlatformToken
 * @method static string uuid
 * @method static string mimeType
 * @method static string fileExtension
 * @method static string file($sourceDirectory = '/tmp', $targetDirectory = '/tmp', $fullPath = true)
 * @method static string imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
 * @method static string image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null)
 * @method static string hexColor
 * @method static string safeHexColor
 * @method static string rgbColor
 * @method static array rgbColorAsArray
 * @method static string rgbCssColor
 * @method static string safeColorName
 * @method static string colorName
 * @method static Generator optional($weight = 0.5, $default = null)
 * @method static Generator unique($reset = false, $maxRetries = 10000)
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
