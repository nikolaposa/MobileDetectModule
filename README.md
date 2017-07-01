# MobileDetectModule

[![Build Status][ico-build]][link-build]
[![Code Coverage][ico-code-coverage]][link-code-coverage]
[![Latest Version][ico-version]][link-packagist]

ZF module which facilitates integration of a PHP MobileDetect library ([http://mobiledetect.net](http://mobiledetect.net)).

## Installation

The preferred method of installation is via [Composer](http://getcomposer.org/). Run the following command to install the latest version of a package and add it to your project's `composer.json`:

```bash
composer require nikolaposa/mobile-detect-module
```

### Enable the module in your `application.config.php`:

```php
<?php
return [
    'modules' => [
        // ...
        'MobileDetectModule',
    ],
    // ...
];
```

## Features

* Factory for creating MobileDetect service
* View helper and controller plugin for providing easier access to the MobileDetect service

## Usage

### MobileDetect service

The actual `Mobile_Detect` class instance will be available under the `MobileDetect` service. Refer to the [Mobile Detect](http://mobiledetect.net/) project documenation for more information about its features.

```php
$mobileDetect = $serviceLocator->get('MobileDetect'); //`Mobile_Detect` class instance
if ($mobileDetect->isMobile()) {
    //do something
}
```

### View helper

View helper - `mobileDetect` is available for providing access to the MobileDetect service on the view layer:

```php
echo $this->mobileDetect()->version('Android');
```

### Controller plugin

Controller plugin - `mobileDetect` is available for providing access to the MobileDetect service on the controller layer:

```php
if ($this->mobileDetect()->isTablet()) {
    //do something
}
```

## Credits

- [Nikola Poša][link-author]
- [All Contributors][link-contributors]

## License

Released under MIT License - see the [License File](LICENSE) for details.


[ico-version]: https://img.shields.io/packagist/v/nikolaposa/MobileDetectModule.svg
[ico-build]: https://travis-ci.org/nikolaposa/MobileDetectModule.svg?branch=master
[ico-code-coverage]: https://img.shields.io/scrutinizer/coverage/g/nikolaposa/MobileDetectModule.svg?b=master

[link-packagist]: https://packagist.org/packages/nikolaposa/MobileDetectModule
[link-build]: https://travis-ci.org/nikolaposa/MobileDetectModule
[link-code-coverage]: https://scrutinizer-ci.com/g/nikolaposa/MobileDetectModule/code-structure
[link-author]: https://github.com/nikolaposa
[link-contributors]: ../../contributors
[link-examples]: examples
