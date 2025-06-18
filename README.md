# Standardise Git Ignore on your dev install

[![Build Status](https://travis-ci.org/sunnysideup/silverstripe-gitignore.svg?branch=master)](https://travis-ci.org/sunnysideup/silverstripe-gitignore)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sunnysideup/silverstripe-gitignore/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sunnysideup/silverstripe-gitignore/?branch=master)
[![codecov.io](https://codecov.io/github/sunnysideup/silverstripe-gitignore/coverage.svg?branch=master)](https://codecov.io/github/sunnysideup/silverstripe-gitignore?branch=master)

[![Latest Stable Version](https://poser.pugx.org/sunnysideup/gitignore/version)](https://packagist.org/packages/sunnysideup/gitignore)
[![License](https://poser.pugx.org/sunnysideup/gitignore/license)](https://packagist.org/packages/sunnysideup/gitignore)
[![Monthly Downloads](https://poser.pugx.org/sunnysideup/gitignore/d/monthly)](https://packagist.org/packages/sunnysideup/gitignore)

## Documentation

-   [Developer Docs](docs/en/INDEX.md)
-   [User Guide](docs/en/userguide.md)
-   [API Docs](http://docs.ssmods.com/sunnysideup/gitignore/classes.xhtml)

## Requirements

See [composer.json](composer.json) for details.

### Suggested modules

See [composer.json](composer.json) for details.

## Installation

```shell
composer require sunnysideup/gitignore
```

### Configuration

In the `_config` folder you will find the `gitignore.yml.example`
file that shows options for the configuration of this module.

We recommend that you:

1. copy these `gitignore.yml.example` files into your
   `app/_config` folder (where available - otherwise search for `private static $` in the module to see what can be configured)
2. remove the .example extension,
3. delete the lines you do not care about, and
4. adjust the configurations that you would like to use.

## Contributing

We welcome any contributions.
See [CONTRIBUTING.md](CONTRIBUTING.md) for more details.

## Paid assistance

You can pay us to create an improved / adapted version of this module for your own projects.
Please contact us if you like to find out more: [www.sunnysideup.co.nz](https://www.sunnysideup.co.nz).
For example, we can write tests for this module.

## Author

Sunny Side Up Ltd.

## Looking for Silverstripe Modules?

To find other modules, please visit [ssmods.com](https://ssmods.com/).
