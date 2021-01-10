Factory Muffin Faker 2.3
========================

[![StyleCI Status](https://github.styleci.io/repos/27880728/shield)](https://github.styleci.io/repos/27880728)
[![Build Status](https://img.shields.io/github/workflow/status/thephpleague/factory-muffin-faker/Tests?label=Tests&style=flat-square)](https://github.com/thephpleague/factory-muffin-faker/actions?query=workflow%3ATests)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Latest Version](https://img.shields.io/github/release/thephpleague/factory-muffin-faker.svg?style=flat-square)](https://github.com/thephpleague/factory-muffin-faker/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/league/factory-muffin-faker.svg?style=flat-square)](https://packagist.org/packages/league/factory-muffin-faker)

The goal of this package is to wrap [Faker](https://github.com/FakerPHP/Faker) to make it super easy to use with [Factory Muffin](https://github.com/thephpleague/factory-muffin).

Note that this library does not actually require Factory Muffin in order to work, so may be used else where too. The whole point of this library is to wrap Faker in closures so the actual generation can be executed at a later point.


## Installing

[PHP](https://php.net) 5.4+ and [Composer](https://getcomposer.org) are required.

In your composer.json, simply add `"league/factory-muffin-faker": "^2.3"` to your `"require-dev"` section:
```json
{
    "require-dev": {
        "league/factory-muffin-faker": "^2.3"
    }
}
```


## Contributing

Please check out our [contribution guidelines](.github/CONTRIBUTING.md) for details.


## Credits

Factory Muffin Faker is a wrapper around [Faker](https://github.com/FakerPHP/Faker) to make it super easy to use with [Factory Muffin](https://github.com/thephpleague/factory-muffin), and is currently maintained by [Graham Campbell](https://github.com/GrahamCampbell). Thank you to all our wonderful [contributors](https://github.com/thephpleague/factory-muffin-faker/contributors) too.


## Security

If you discover a security vulnerability within this package, please send an email to Graham Campbell at graham@alt-three.com. All security vulnerabilities will be promptly addressed. You may view our full security policy [here](https://github.com/thephpleague/factory-muffin-faker/security/policy).


## License

Factory Muffin Faker is licensed under [The MIT License (MIT)](LICENSE).


For Enterprise
--------------

Available as part of the Tidelift Subscription

The maintainers of `league/factory-muffin-faker` and thousands of other packages are working with Tidelift to deliver commercial support and maintenance for the open source dependencies you use to build your applications. Save time, reduce risk, and improve code health, while paying the maintainers of the exact dependencies you use. [Learn more.](https://tidelift.com/subscription/pkg/packagist-league-factory-muffin-faker?utm_source=packagist-league-factory-muffin-faker&utm_medium=referral&utm_campaign=enterprise&utm_term=repo)
